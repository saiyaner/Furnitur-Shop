<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart', []);
        
        // Initialize quantity for each item if not exists
        foreach ($cart as $key => $item) {
            if (!isset($item['quantity'])) {
                $cart[$key]['quantity'] = 1;
            }
        }
        session()->put('cart', $cart);
        
        return view('checkout', compact('cart'));
    }

    /**
     * Update quantity for cart item
     */
    public function updateQuantity(Request $request)
    {
        $request->validate([
            'cart_key' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);
        
        if (!isset($cart[$request->cart_key])) {
            return response()->json([
                'success' => false,
                'message' => 'Item tidak ditemukan di keranjang. Cart key: ' . $request->cart_key
            ], 404);
        }

        $item = $cart[$request->cart_key];
        
        // Ensure stock exists
        if (!isset($item['stock'])) {
            $item['stock'] = 99; // Default stock
        }
        
        // Check stock
        if ($request->quantity > $item['stock']) {
            return response()->json([
                'success' => false,
                'message' => 'Stock tidak mencukupi. Stok tersedia: ' . $item['stock']
            ], 400);
        }

        $cart[$request->cart_key]['quantity'] = (int)$request->quantity;
        session()->put('cart', $cart);

        // Calculate totals
        $totalAmount = 0;
        $totalPrice = 0;
        foreach ($cart as $item) {
            $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 1;
            $totalAmount += $quantity;
            $totalPrice += $item['price'] * $quantity;
        }

        return response()->json([
            'success' => true,
            'total_amount' => $totalAmount,
            'total_price' => number_format($totalPrice, 2)
        ]);
    }
    /**
     * Add item to cart
     */
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'color' => 'nullable|string|max:50',
        ]);

        $product = Product::findOrFail($request->product_id);

        $cart = session()->get('cart', []);
        $cartKey = $request->product_id . '_' . ($request->color ?? 'default');

        // Check if item already exists in cart
        if (isset($cart[$cartKey])) {
            return response()->json([
                'success' => false,
                'message' => 'Produk sudah ada di keranjang'
            ], 400);
        }

        // Add new item to cart (hanya 1 produk tanpa quantity)
        $cart[$cartKey] = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'color' => $request->color ?? $product->color,
            'image' => $product->image,
            'stock' => $product->stock,
        ];

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan ke keranjang',
            'cart_count' => $this->getCartItemCount($cart)
        ]);
    }

    /**
     * Get cart count
     */
    public function getCartCount()
    {
        $cart = session()->get('cart', []);
        $count = $this->getCartItemCount($cart);

        return response()->json([
            'cart_count' => $count
        ]);
    }

    /**
     * Calculate total items in cart (hitung jumlah produk, bukan quantity)
     */
    private function getCartItemCount($cart)
    {
        return count($cart);
    }
}


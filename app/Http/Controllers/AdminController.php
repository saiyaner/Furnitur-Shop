<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display admin dashboard with statistics
     */
    public function dashboard()
    {
        // Statistik produk - update untuk multiple colors
        $totalProducts = Product::count();
        
        // Total stock dari semua warna semua produk
        $totalStock = Product::all()->sum(function($product) {
            return $product->total_stock;
        });
        
        // Produk dengan stok rendah (total stock < 10)
        $lowStockProducts = Product::all()->filter(function($product) {
            return $product->total_stock < 10 && $product->total_stock > 0;
        })->count();
        
        // Produk habis (total stock = 0)
        $outOfStockProducts = Product::all()->filter(function($product) {
            return $product->total_stock == 0;
        })->count();
        
        // Statistik rating
        $goodRatings = Product::where('rate', '>=', 4.0)->count();
        $averageRatings = Product::where('rate', '>=', 3.0)->where('rate', '<', 4.0)->count();
        $badRatings = Product::where('rate', '<', 3.0)->count();
        
        // Produk dengan rating terbaik dan terburuk
        $topRatedProducts = Product::orderBy('rate', 'desc')->take(5)->get();
        $lowRatedProducts = Product::where('rate', '>', 0)->orderBy('rate', 'asc')->take(5)->get();
        
        // Produk dengan stok terendah
        $lowStockList = Product::all()->sortBy('total_stock')->take(10);
        
        // Statistik per kategori
        $categoryStats = Product::selectRaw('category, COUNT(*) as total, AVG(rate) as avg_rate')
            ->groupBy('category')
            ->get();

        return view('Admin.dashboard', compact(
            'totalProducts',
            'totalStock',
            'lowStockProducts',
            'outOfStockProducts',
            'goodRatings',
            'averageRatings',
            'badRatings',
            'topRatedProducts',
            'lowRatedProducts',
            'lowStockList',
            'categoryStats'
        ));
    }

    /**
     * Display list of all products for management
     */
    public function products()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product
     */
    public function create()
    {
        $categories = ['chair', 'table', 'sofa', 'lamp', 'bed', 'other'];
        return view('Admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created product
     */
    public function store(Request $request)
    {
        $validated = $request->validate(Product::rules());

        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'category' => 'required|in:chair,table,sofa,lamp,bed,other',
        'rate' => 'nullable|numeric|between:0,5',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'color' => 'required|array|min:1',
        'color.*.name' => 'required|string|max:50',
        'color.*.stock' => 'required|integer|min:0',
        'color.*.hex_code' => 'nullable|string|max:7',
    ]);

        DB::transaction(function () use ($validated, $request) {
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $product = Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'category' => $validated['category'],
            'rate' => $validated['rate'] ?? 0.0,
            'description' => $validated['description'],
            'image' => $imagePath,
            'color' => $validated['color'],
            'stock' => 0
        ]);
    });

    return redirect()->route('admin.products')->with('success', 'Product created successfully!');
    }

    /**
     * Show the form for editing a product
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = ['chair', 'table', 'sofa', 'lamp', 'bed', 'other'];
        return view('Admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:chair,table,sofa,lamp,bed,other',
            'rate' => 'nullable|numeric|between:0,5',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'color' => 'required|array|min:1', // Ubah ini juga
            'color.*.name' => 'required|string|max:50',
            'color.*.stock' => 'required|integer|min:0',
            'color.*.hex_code' => 'nullable|string|max:7',
        ]);

        DB::transaction(function () use ($product, $validated, $request) {
            // Handle image upload
            $imagePath = $product->image;
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                }
                $imagePath = $request->file('image')->store('products', 'public');
            }

            return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
        });
    }

    /**
     * Remove the specified product
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // Delete image if exists
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        
        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }
}
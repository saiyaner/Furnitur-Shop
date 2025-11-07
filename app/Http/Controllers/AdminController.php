<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display admin dashboard with statistics
     */
    public function dashboard()
    {
        // Statistik produk
        $totalProducts = Product::count();
        $totalStock = Product::sum('stock');
        $lowStockProducts = Product::where('stock', '<', 10)->count();
        $outOfStockProducts = Product::where('stock', 0)->count();
        
        // Statistik rating
        $goodRatings = Product::where('rate', '>=', 4.0)->count();
        $averageRatings = Product::where('rate', '>=', 3.0)->where('rate', '<', 4.0)->count();
        $badRatings = Product::where('rate', '<', 3.0)->count();
        
        // Produk dengan rating terbaik dan terburuk
        $topRatedProducts = Product::orderBy('rate', 'desc')->take(5)->get();
        $lowRatedProducts = Product::where('rate', '>', 0)->orderBy('rate', 'asc')->take(5)->get();
        
        // Produk dengan stok terendah
        $lowStockList = Product::where('stock', '<', 10)->orderBy('stock', 'asc')->take(10)->get();
        
        // Statistik per kategori
        $categoryStats = Product::selectRaw('category, COUNT(*) as total, SUM(stock) as total_stock, AVG(rate) as avg_rate')
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
        $categories = Product::getCategories();
        return view('Admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created product
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category' => 'required|in:chair,table,sofa,lamp,bed,other',
            'rate' => 'nullable|numeric|between:0,5',
            'color' => 'required|string|max:50',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = null;
        }

        $validated['rate'] = $validated['rate'] ?? 0.0;

        Product::create($validated);

        return redirect()->route('admin.products')->with('success', 'Product created successfully!');
    }

    /**
     * Show the form for editing a product
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Product::getCategories();
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
            'stock' => 'required|integer|min:0',
            'category' => 'required|in:chair,table,sofa,lamp,bed,other',
            'rate' => 'nullable|numeric|between:0,5',
            'color' => 'required|string|max:50',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['rate'] = $validated['rate'] ?? $product->rate;

        $product->update($validated);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
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


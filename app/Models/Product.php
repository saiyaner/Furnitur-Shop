<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'stock',
        'category',
        'rate',
        'color',
        'description',
        'image'
    ];

    public static function getCategories()
    {
        return [
            'chair' => 'Chair',
            'table' => 'Table',
            'sofa' => 'Sofa',
            'lamp' => 'Lamp',
            'bed' => 'Bed',
            'other' => 'Other Furniture',
        ];
    }

    protected $attributes = [
        'category' => 'other',
        'rate' => 0.0,
        'stock' => 0,
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'rate' => 'decimal:1',
    ];

    // Rules untuk validation
    public static function rules($id = null)
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category' => [
                'required',
                Rule::in(array_keys(self::getCategories()))
            ],
            'rate' => 'nullable|numeric|between:0,5',
            'color' => 'required|string|max:50',
            'description' => 'required|string',
            'image' => 'nullable|string|max:255',
        ];
    }

    // Accessor untuk label category
    public function getCategoryLabelAttribute()
    {
        return self::getCategories()[$this->category] ?? 'Unknown';
    }

     //Accessor untuk memastikan rate selalu numeric
    public function getRateAttribute($value)
    {
        return (float) $value;
    }

    //Scope untuk produk popular
    public function scopePopular($query)
    {
        return $query->orderBy('rate')->take(8);
    }

    // Accessor untuk mendapatkan URL image yang benar
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }

        $image = trim($this->image);

        // Jika sudah full URL (http:// atau https://), return langsung
        if (filter_var($image, FILTER_VALIDATE_URL) || 
            str_starts_with($image, 'http://') || 
            str_starts_with($image, 'https://')) {
            return $image;
        }

        // Jika path dimulai dengan /storage/, gunakan asset
        if (str_starts_with($image, '/storage/')) {
            return asset(substr($image, 1));
        }

        // Jika path dimulai dengan storage/ (tanpa leading slash)
        if (str_starts_with($image, 'storage/')) {
            return asset($image);
        }

        // Jika path dimulai dengan products/, tambahkan storage/
        if (str_starts_with($image, 'products/')) {
            return asset('storage/' . $image);
        }

        // Jika path dimulai dengan /img/ atau /images/ atau hanya /, gunakan asset
        if (str_starts_with($image, '/')) {
            return asset($image);
        }

        // Jika path dimulai dengan img/ atau images/ (tanpa leading slash)
        if (str_starts_with($image, 'img/') || str_starts_with($image, 'images/')) {
            return asset($image);
        }

        // Default: coba sebagai path di storage
        // Jika file ada di storage, gunakan storage/
        $storagePath = storage_path('app/public/' . $image);
        if (file_exists($storagePath)) {
            return asset('storage/' . $image);
        }

        // Jika file ada di public, gunakan asset langsung
        $publicPath = public_path($image);
        if (file_exists($publicPath)) {
            return asset($image);
        }

        // Fallback terakhir: coba sebagai asset langsung (mungkin path relatif dari root)
        return asset($image);
    }
}

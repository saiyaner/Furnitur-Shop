<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'stock', 'category', 'rate', 'color', 'description', 'image'
    ];

    protected $casts = [
        'color' => 'array'
    ];

    // Accessor untuk total_stock
    public function getTotalStockAttribute()
    {
        if (!$this->color || !is_array($this->color)) {
            return $this->stock; // Fallback ke stock lama
        }
        
        return collect($this->color)->sum('stock');
    }

    // Accessor untuk available_colors
    public function getAvailableColorsAttribute()
    {
        if (!$this->color || !is_array($this->color)) {
            return collect();
        }
        
        return collect($this->color)->where('stock', '>', 0);
    }

    // Accessor untuk image_url
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return null;
    }

     public static function rules($id = null)
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => [
                'required',
                Rule::in(['chair', 'table', 'sofa', 'lamp', 'bed', 'other'])
            ],
            'rate' => 'nullable|numeric|between:0,5',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'color' => 'required|array|min:1',
            'color.*.name' => 'required|string|max:50',
            'color.*.stock' => 'required|integer|min:0',
            'color.*.hex_code' => 'nullable|string|max:7',
        ];
    }

    // Backward compatibility untuk color attribute
    public function getColorAttribute($value)
    {
        if (is_string($value)) {
            try {
                $decoded = json_decode($value, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    return $decoded;
                }
            } catch (\Exception $e) {
                // Jika bukan JSON, anggap sebagai single color
                return [
                    [
                        'name' => $value,
                        'stock' => $this->attributes['stock'] ?? 0,
                        'hex_code' => '#cccccc'
                    ]
                ];
            }
        }
        
        return $value;
    }

    public function setColorAttribute($value)
    {
        // Simpan sebagai JSON
        $this->attributes['color'] = json_encode($value);
    }

    // Helper method untuk mendapatkan categories
    public static function getCategories()
    {
        return [
            'chair' => 'Chair',
            'table' => 'Table', 
            'sofa' => 'Sofa',
            'lamp' => 'Lamp',
            'bed' => 'Bed',
            'other' => 'Other'
        ];
    }
}
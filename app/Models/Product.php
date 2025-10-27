<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}

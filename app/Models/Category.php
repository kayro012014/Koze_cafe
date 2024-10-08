<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'tblcategory';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'categoryName',
        'description',
    ];

    // Optionally define any relationships (if applicable)
    // e.g., if a category has many products
    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'category_id', 'category_id');
    // }
}

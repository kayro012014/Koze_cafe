<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tblproducts';

    protected $primaryKey = 'prod_id';

    public $incrementing = true;

    protected $fillable = [
        'category_Id',
        'inventory_id',
        'product_name',
        'prod_price',
        'product_added',
        'product_image',
        'product_status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_Id');
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    protected $table = 'tblcustomer';


    protected $primaryKey = 'customer_id';


    protected $fillable = [
        'customerName',
        'pricingCategory',
    ];

    // Optionally define any relationships (if applicable)
    // e.g., if a customer has many transactions
    // public function transactions()
    // {
    //     return $this->hasMany(Transaction::class, 'customer_id', 'customer_id');
    // }
}

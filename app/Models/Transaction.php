<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'tbltransaction';

    // Primary key field
    protected $primaryKey = 'trans_ID';

    // Indicate if the IDs are auto-incrementing
    public $incrementing = true;

    // The attributes that are mass assignable
    protected $fillable = [
        'prod_id',
        'customer_ID',
        'pay_id',
        'menu_Id',
        'qty_order',
        'total_price',
        'order_date',
        'orderTime',
    ];

    // Define relationships
    public function product()
    {
        return $this->belongsTo(Product::class, 'prod_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_ID');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'pay_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_Id');
    }

    // Add any additional methods or properties as needed
}

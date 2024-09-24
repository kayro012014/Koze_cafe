<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';
    protected $primaryKey = 'inventory_id'; // Fixed typo: primarykey -> primaryKey
    protected $fillable = [
        'category_name',
        'ingredients',
        'image',
        'stocks',
        'stocks_left',
        'expiration_date',
        'date_added',
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;


    protected $table = 'tblinventory';


    protected $primaryKey = 'invent_id';

    public $incrementing = true;

    protected $fillable = [
        'ingredient_name',
        'inventory_stocks',
        'restockDate',
        'expiration_date',
    ];

    // If you want to use timestamps (created_at and updated_at)
    public $timestamps = true;
}

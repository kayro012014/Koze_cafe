<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'tblmenu';

    protected $primaryKey = 'menuID';

    public $incrementing = true;

    protected $fillable = [
        'category_id',
        'description',
    ];

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}

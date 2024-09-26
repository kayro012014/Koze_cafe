<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'tblinvoice';

    protected $primaryKey = 'invoice_id';

    public $incrementing = true;

    protected $fillable = [
        'trans_ID',
        'change',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'trans_ID', 'trans_ID');
    }
}

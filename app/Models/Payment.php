<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'tblpayments';
    protected $primaryKey = 'pay_id';

    public $incrementing = true;

    protected $fillable = [
        'paymentType',
        'reference_Num',
        'totalPayment',
    ];
}

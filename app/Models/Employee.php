<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'tblemployee';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'employee_Id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'fullname',
        'username',
        'email',
        'address',
        'contact_number',
        'job_role',
        'password',
        'description',
        'employee_Stat',
    ];

    // Optionally define any relationships (if applicable)
    // For example, if an employee can have many transactions or orders
    // public function transactions()
    // {
    //     return $this->hasMany(Transaction::class, 'employee_id', 'employee_Id');
    // }

    // Hash the password before saving
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($employee) {
            $employee->password = bcrypt($employee->password);
        });
    }
}

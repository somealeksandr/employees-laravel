<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'department_id',
        'name',
        'date_birth',
        'position',
        'type',
        'monthly_payment',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

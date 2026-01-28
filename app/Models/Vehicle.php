<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // tên xe 
        'license_plate',// biển số xe
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}

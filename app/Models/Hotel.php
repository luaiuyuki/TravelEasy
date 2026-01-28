<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_id',
        'name',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}

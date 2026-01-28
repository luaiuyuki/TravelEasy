<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_id',
        'name',
        'phone',
        'email',
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

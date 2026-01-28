<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
        protected $fillable = [
        'city',
        'district',
        'ward',
        'detail_address'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'address',
        'open',
        'ticket',
        'image'
    ];

    public function getImageAttribute()
    {
        return $this->attributes['image'] ?  URL::to('/') . '/' . $this->attributes['image'] : null;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'capacity',
        'bed',
        'services',
        'img',
        'img2',
        'img3'
    ]; 

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}

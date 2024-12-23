<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class WeddingPhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'wedding_photos';

    protected $fillable = [
        'id',
        'wedding_package_id',
        'photo',
    ];

}

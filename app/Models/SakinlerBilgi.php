<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SakinlerBilgi extends Model
{
    use HasFactory;

    protected $fillable = [
        'ad',
        'soyad',
        'telefon',
        'email',
        'adres',
        'resim',
    ];
}

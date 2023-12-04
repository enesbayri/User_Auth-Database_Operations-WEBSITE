<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UyeGiris extends Model
{
    protected $fillable=[
        'adSoyad',
        'tc',
        'kullaniciAdi',
        'email',
        'sifre'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'Data_Buku',
        'Kategori',
        'Nama_Buku',
        'Harga',
        'Stok',
        'Penerbit'
    ];
    protected $table = 'Buku';
    public $timestamps = false;
}
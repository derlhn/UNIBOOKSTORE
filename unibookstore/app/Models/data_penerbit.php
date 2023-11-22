<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_penerbit extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Penerbit',
        'Nama',
        'Alamat',
        'Kota',
        'Telepon'
    ];
    protected $table = 'data_penerbit';
    public $timestamps = false;
}

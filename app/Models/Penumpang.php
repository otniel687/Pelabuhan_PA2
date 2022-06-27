<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jk','umur', 'alamat', 'pesanan_id'
    ];
}

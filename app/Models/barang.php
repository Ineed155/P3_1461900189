<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = [
        'nama',
        'harga',
    ];
}

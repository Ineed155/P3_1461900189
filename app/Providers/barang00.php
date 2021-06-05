<?php
namespace App;
use Illuminate\Database\Eloquent\Models;
class barang00 extends Models{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $filelabel = [
        'id', 'nama', 'harga'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;

    protected $table = "transaksidetail";

    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi');
    }
    public function barang(){
        return $this->belongsTo('App\Models\Barang');
    }
}

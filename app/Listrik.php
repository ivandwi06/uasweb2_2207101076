<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listrik extends Model
{
    protected $table = "tb_tagihan";

    protected $primaryKey = 'id_pelanggan';

    protected $fillable = ['no_pelanggan', 'nama_pelanggan', 'alamat', 'jml_tagihan', 'keterangan'];
}

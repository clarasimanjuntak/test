<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "data_buku";

    protected $fillable = ['id', 'judul', 'penulis', 'penerbit'];
}

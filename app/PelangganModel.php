<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $primaryKey = 'id_pelanggan';
}

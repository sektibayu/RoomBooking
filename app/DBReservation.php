<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBReservation extends Model
{
    protected $primaryKey='';
    public $timestamps=false;
    protected $fillable=[
    'masuk',
    'jenis',
    'nama_inventaris',
    'diperoleh_dengan',
    'diperoleh_dari',
    'nilai_awal',
    'id_pegawai',
    'catatan'
    ];
}

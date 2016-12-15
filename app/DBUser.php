<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBUser extends Model
{
    protected $table='user';
 	protected $primaryKey='nrp_nip';
    public $timestamps=false;
    protected $fillable=[
    'name'
    ];

 	public function reservation()
 	{
 		return $this->hasMany('App/DBReservation');
 	}
}

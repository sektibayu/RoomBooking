<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBReservation extends Model
{

 	protected $table='reservation';
 	protected $primaryKey='reservation_id';
    public $timestamps=false;
    protected $fillable=[
    'nrp_nip',
    'room_id',
    'start_time',
    'end_time',
    'status'
    ];

 	public function room()
 	{
 		return $this->belongsTo('App/DBRoom');
 	}

 	public function user()
 	{
 		return $this->belongsTo('App/DBUser');
 	}
}

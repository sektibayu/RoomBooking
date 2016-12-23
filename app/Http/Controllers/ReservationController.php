<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use App\DBReservation;
use App\DBUser;
use App\DBRoom;

class ReservationController extends Controller
{

    public function ReservationInput(){
        $data = Input::all();
        $user = DBUser::where('nrp_nip', '=', $data['nrp_nip'])->first();
        if($user === null){
            return 1;
        }
        else{
            DBReservation::InsertGetId(array(
                'nrp_nip'=>$data['nrp_nip'],
                'room_id'=>$data['room_id'],
                'date_begin'=>$data['date_begin'],
                'time_begin'=>$data['time_begin'],
                'date_finish'=>$data['date_finish'],
                'time_finish'=>$data['time_finish'],
                'purpose'=>$data['purpose'],
                'status'=>'0'
                ));
            return redirect('reservasi');
        }
    }

    public function DisplayPendingRequest(){
        $display = DBReservation::where('status', '=', '0')->get();
        return view('pages.reservasi',compact('display'));
    }
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     return view("reservasi");
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}

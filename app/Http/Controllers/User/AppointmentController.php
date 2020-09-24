<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('user.appointment');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->all(); */
        $this->validate($request,[
            'firstname' =>'required',
            'lastname' =>'required',
            'service' =>'required',
            'phone' =>'required',
            'date' =>'required',
            'time' =>'required',
            'message' =>'required',
        ]);
        
      
        $appointment = new appointment;
        $appointment->first_name = $request->firstname;
        $appointment->last_name = $request->lastname;
        $appointment->service = $request->service;
        $appointment->phone = $request->phone;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->message = $request->message;
        $appointment->save();

        return redirect(route('appointment.index'));
    }

    
}



<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\appointment;
use App\Models\user\doctor;


class AppointmentController extends Controller
{

    public function index()
    {

        $doctors = doctor::all();
      
        return view('user.appointment',compact('doctors'));
    }


    
}



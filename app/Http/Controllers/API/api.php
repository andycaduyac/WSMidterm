<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentAPI extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();

        return response()->json(['appointments'=>$appointments],200);
    }
}
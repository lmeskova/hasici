<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IncidentDetailController extends Controller
{
    public function details()
    {
        return view('incidentDetail');
    }

}

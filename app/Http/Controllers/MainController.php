<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Models\Ticket;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {
        return view('home');
    }

    public function passengers() {
        $passengers_data = new Passenger();
        return view('passengers', ['passengers_data' => $passengers_data->all()]);
    }

    public function tickets() {
        $tickets_data = new Ticket();
        return view('tickets' ,['tickets_data' => $tickets_data->all()]);
    }
}

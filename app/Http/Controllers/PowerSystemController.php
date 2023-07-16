<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PowerSystemController extends Controller
{
    public function dashboard()
    {
        return view('power_system.dashboard');
    }

    public function numbers()
    {
        return view('power_system.numbers');
    }

    public function raDates()
    {
        return view('power_system.ra_dates');
    }

    public function transactions()
    {
        return view('power_system.transactions');
    }

    public function users()
    {
        return view('power_system.users');
    }



}

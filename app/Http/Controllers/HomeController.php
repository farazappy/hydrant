<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(Request $request)
    {
        $areas = ['Alipore', 'Camac Street', 'JL Nehru Road', 'Kalighat', 'Kasba', 'Kona Expressway', 'New Town', 'Park Street', 'Rajarhat', 'Salt Lake City', 'Sarat Bose Road', 'Science City', 'Strand Road'];

        $selectedArea = $request->area ? $request->area : 'Park Street';

        return view('home')->withAreas($areas)->withSelectedArea($selectedArea);
    }
}

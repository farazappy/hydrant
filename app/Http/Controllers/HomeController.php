<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\User;

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
        //$areas = ['Alipore', 'Camac Street', 'JL Nehru Road', 'Kalighat', 'Kasba', 'Kona Expressway', 'New Town', 'Park Street', 'Rajarhat', 'Salt Lake City', 'Sarat Bose Road', 'Science City', 'Strand Road'];
        $areas = Area::all();
        // $user = Auth::user();
        $selectedArea = $request->area ? $request->area : 'Park Street';

        return view('home')->withAreas($areas)->withSelectedArea($selectedArea);
    }
    public function add_area()
    {
        return view('add_area');
    }
    public function store(Request $request)
    {
        //dd($request->area_name);
        $area = new Area();
        $area->area_name = request('area_name');
        $area->save();
        return redirect('home');
    }
}

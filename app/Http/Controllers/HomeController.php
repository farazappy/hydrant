<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\User;
use App\Notification;
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
        $notifications = Notification::all();
        // $user = Auth::user();
        $selectedArea = $request->area ? $request->area : 'Park Street';

        return view('home')->withAreas($areas)->withSelectedArea($selectedArea)->withNotifications($notifications);
    }
    public function add_area()
    {
        $notifications = Notification::all();
        return view('add_area')->withNotifications($notifications);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $area_name = $request->area_name;
        Area::create(['area_name' => $area_name]);

        return redirect('home')->with('message', 'Area Added Successfully');
    }
}

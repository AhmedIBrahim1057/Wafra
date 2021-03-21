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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function aboutProject()
    {
        return view('frontend.about.project');
    }

    public function aboutTeam()
    {
        return view('frontend.about.team');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }
    
}

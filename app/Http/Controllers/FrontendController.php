<?php

namespace App\Http\Controllers;

use App\Album;
use App\Camera;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::orderBy('travel_date', 'desc')->get();
        $cameras = Camera::all();

        return view('frontend', compact('albums', 'cameras'));
    }
}

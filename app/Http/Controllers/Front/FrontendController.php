<?php

namespace App\Http\Controllers\Front;

use App\Album;
use App\Camera;
use App\Http\Controllers\Controller;

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

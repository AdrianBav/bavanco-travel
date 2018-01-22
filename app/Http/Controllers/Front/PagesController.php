<?php

namespace App\Http\Controllers\Front;

use App\Album;
use App\Camera;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::with('photographs.camera')->orderBy('travel_date', 'desc')->get();
        $cameras = Camera::all();

        return view('front.index', compact('albums', 'cameras'));
    }
}

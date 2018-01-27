<?php

namespace App\Http\Controllers\Front;

use App\Album;
use App\Camera;
use App\CameraType;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::with('photographs.camera')->orderBy('travel_date', 'desc')->get();
        $cameras = Camera::withCount('photographs')->orderBy('photographs_count', 'desc')->get();

        return view('front.index', compact('albums', 'cameras'));
    }

    /**
     * Show the cameras page.
     *
     * @return \Illuminate\Http\Response
     */
    public function cameras()
    {
        $camera_types = CameraType::with('cameras')->get();

        return view('front.cameras', compact('camera_types'));
    }
}

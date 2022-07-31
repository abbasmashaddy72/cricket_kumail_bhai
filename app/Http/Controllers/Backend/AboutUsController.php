<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('pages.backend.about_us');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Review;

class DashboardController extends Controller
{
    public function index()
    {
        $contactedUs = ContactUs::count();
        $blogsCount = Blog::count();
        $blogsViewSum = Blog::sum('clicks');
        $reviewsCount = Review::count();

        return view('pages.backend.dashboard', compact([
            'contactedUs',
            'blogsCount',
            'blogsViewSum',
            'reviewsCount'
        ]));
    }
}

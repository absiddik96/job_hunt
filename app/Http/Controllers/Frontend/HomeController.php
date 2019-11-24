<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome')
            ->with('job_posts',JobPost::where('deadline', '>', date('Y-m-d'))->with(['advertiser.advertiserInfo'])->get());
    }

    public function jobPostDetails(JobPost $jobPost)
    {
        return view('job-post-details')
            ->with('post', $jobPost->load(['advertiser.advertiserInfo']));
    }
}

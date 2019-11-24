<?php

namespace App\Http\Controllers\Advertiser;

use Session;
use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('advertiser.job_post.index')
            ->with('job_posts', auth()->user()->jobPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertiser.job_post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "title" => ['required','string','max:255'],
            "description" => ['required'],
            "location" => ['required','string','max:255'],
            "country" => ['required','string','max:255'],
            "salary" => ['required','numeric'],
            "deadline" => ['required','date','after:today'],
        ]);

        auth()->user()->jobPosts()->create($request->all());
        Session::flash('success', 'Job Posted successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        return view('advertiser.job_post.show')
            ->with('post', $jobPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        return view('advertiser.job_post.edit')
            ->with('job_post', $jobPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        $this->validate($request,[
            "title" => ['required','string'],
            "description" => ['required'],
            "location" => ['required','string'],
            "country" => ['required','string'],
            "salary" => ['required','numeric'],
            "deadline" => ['required','date','after:today'],
        ]);

        $jobPost->update($request->all());
        Session::flash('success', 'Job Post updated successfully');
        return redirect()->route('advertiser.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        $jobPost->delete();
        Session::flash('success', 'Job Post deleted successfully');
        return redirect()->route('advertiser.dashboard');
    }
}

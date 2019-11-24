<?php

namespace App\Http\Controllers\Candidate;

use Session;
use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobAppliesController extends Controller
{
    public function apply(JobPost $jobPost)
    {
        if(auth()->user()->user_role == 'candidate' && auth()->user()->candidateInfo && auth()->user()->candidateInfo->resume)
        {
            $apply_job = [];
            $apply_job['advertiser_id'] = $jobPost->advertiser_id;
            $apply_job['job_post_id'] = $jobPost->id;

            Session::flash('success','Applied Successfully');
            auth()->user()->applications()->create($apply_job);
            return redirect()->back();
        }
        Session::flash('info','Please upload your resume first!!!');
        return redirect()->route('candidate.profile');
    }

}

<?php

namespace App\Http\Controllers\Advertiser;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use App\User;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function applicants(JobPost $jobPost)
    {
        return view('advertiser.applicants')
            ->with('post', $jobPost->load(['applicants.candidate.candidateInfo']));
    }

    public function applicantDetails($candidate_id)
    {
        return view('advertiser.applicant-details')
            ->with('applicant', User::where('uid',$candidate_id)->with(['candidateInfo'])->first());
    }
}

<?php

namespace App\Http\Controllers\Candidate;

use Session;
use App\Http\Controllers\Controller;
use App\Models\CandidateInfo;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume()
    {
        return view('candidate.resume')
            ->with('resume', auth()->user()->candidateInfo);
    }

    public function uploadResume(Request $request)
    {
        $this->validate($request,[
            'resume' => ['required','mimes:pdf,docx']
        ]);

        $resumeName = auth()->user()->first_name.'-'.time().'.'.request()->resume->getClientOriginalExtension();
        $request->resume->move(public_path(CandidateInfo::RESUME_UPLOAD_PATH), $resumeName);

        if (auth()->user()->candidateInfo){
            auth()->user()->candidateInfo()->update(['resume' => $resumeName]);
        } else {
            auth()->user()->candidateInfo()->create(['resume' => $resumeName]);
        }
        Session::flash('success', 'Resume uploaded successfully');
        return redirect()->back();
    }
}

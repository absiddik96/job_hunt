<?php

namespace App\Http\Controllers\Candidate;

use Session;
use App\Http\Controllers\Controller;
use App\Models\CandidateInfo;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function profile()
    {
        return view('candidate.profile')
            ->with('profile', auth()->user()->candidateInfo);
    }

    public function uploadAvatar(Request $request)
    {
        $this->validate($request,[
            'avatar' => ['required','mimes:jpeg,png,jpg','max:1024','dimensions:max_width=270 ,max_height=210']
        ]);

        $avatarName = time().'.'.request()->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path(CandidateInfo::AVATAR_UPLOAD_PATH), $avatarName);

        if (auth()->user()->candidateInfo){
            auth()->user()->candidateInfo()->update(['avatar' => $avatarName]);
        } else {
            auth()->user()->candidateInfo()->create(['avatar' => $avatarName]);
        }
        Session::flash('success', 'Avatar uploaded successfully');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. auth()->user()->id],
        ]);

        auth()->user()->update($request->all());
        Session::flash('success', 'Profile updated successfully');
        return redirect()->back();
    }
}

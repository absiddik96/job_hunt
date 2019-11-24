<?php

namespace App\Http\Controllers\Candidate;

use Session;
use App\Http\Controllers\Controller;
use App\Models\CandidateSkill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidate.skill.index')
            ->with('skills', auth()->user()->candidateSkills);
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
            'skill' => ['required','string'],
            'percentage' => ['required','numeric']
        ]);

        auth()->user()->candidateSkills()->create($request->all());
        Session::flash('success','Skill added successfully');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidateSkill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidateSkill $skill)
    {
        return view('candidate.skill.edit')
            ->with('skill', $skill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CandidateSkill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidateSkill $skill)
    {
        $this->validate($request,[
            'skill' => ['required','string'],
            'percentage' => ['required','numeric']
        ]);

        $skill->update($request->only(['skill','percentage']));
        Session::flash('success','Skill updated successfully');
        return redirect()->route('candidate.skills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CandidateSkill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidateSkill $skill)
    {
        $skill->delete();
        Session::flash('success','Skill updated successfully');
        return redirect()->route('candidate.skills.index');
    }
}

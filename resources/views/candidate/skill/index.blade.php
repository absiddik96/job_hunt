@extends('layouts.app')

@section('content')
    @include('include.header._header')
    <section>
        <div class="block remove-top">
            <div class="container">
                <div class="row no-gape">
                    @include('include.sidebar._candidate')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec">
                                <div class="border-title"><h3>Professional Skills</h3></div>
                                <div class="progress-sec">
                                    @if ($skills->count())
                                        @foreach ($skills as $skill)
                                            <div class="progress-sec with-edit">
                                                <span>{{ $skill->skill }}</span>
                                                <div class="progressbar"> <div class="progress" style="width: {{ $skill->percentage }}%;"><span>{{ $skill->percentage }}%</span></div> </div>
                                                <ul class="action_job">
                                                    <li><span>Edit</span><a href="{{ route('candidate.skills.edit',$skill->uid) }}" title=""><i class="la la-pencil"></i></a></li>
                                                    <li><span>Delete</span>
                                                        <form action="{{ route('candidate.skills.destroy',$skill->uid) }}" method="post" id="delete-{{ $skill->uid }}">
                                                            @csrf @method('delete')
                                                            <a onclick="document.getElementById('delete-{{ $skill->uid }}').submit()"><i class="la la-trash-o"></i></a>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="resumeadd-form">
                                    <form action="{{ route('candidate.skills.store') }}" method="post">
                                        @csrf
                                        <div class="row align-items-end">
                                            <div class="col-lg-7">
                                                <span class="pf-title">Skill Heading</span>
                                                <div class="pf-field">
                                                    <input name="skill" placeholder="" type="text" value="{{ old('skill') }}">
                                                    @error('skill')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <span class="pf-title">Percentage</span>
                                                <div class="pf-field">
                                                    <input name="percentage" placeholder="" type="number" min="1" max="100" value="{{ old('percentage') }}">
                                                    @error('percentage')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

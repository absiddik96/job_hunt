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
                                <div class="border-title"><h3>Update Skill</h3></div>
                                <div class="resumeadd-form">
                                    <form action="{{ route('candidate.skills.update',$skill->uid) }}" method="post">
                                        @csrf @method('put')
                                        <div class="row align-items-end">
                                            <div class="col-lg-7">
                                                <span class="pf-title">Skill Heading</span>
                                                <div class="pf-field">
                                                    <input name="skill" placeholder="" type="text" value="{{ old('skill',$skill->skill) }}">
                                                    @error('skill')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <span class="pf-title">Percentage</span>
                                                <div class="pf-field">
                                                    <input name="percentage" placeholder="" type="number" min="1" max="100" value="{{ old('percentage',$skill->percentage) }}">
                                                    @error('percentage')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit">update</button>
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

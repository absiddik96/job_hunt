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
                            <div class="profile-title">
                                <h3>My Resume</h3>
                            </div>
                            <div class="profile-form-edit mt-3">
                                @if ($resume->resume)
                                    <div class="col-md-12 pb-3 pl-4">
                                        <a target="_blank" href="{{ $resume->resume_path }}">{{ $resume->resume }}</a>
                                        <a download href="{{ $resume->resume_path }}"><i class="fa fa-download"></i></a>
                                    </div>
                                @endif
                                <form action="{{ route('candidate.resume.upload') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input name="resume" type="file" accept="application/pdf,.docx,application/msword"><br>
                                    <span>Suitable files are .pdf & .docx</span><br>
                                    @error('resume')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <button>Upload</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection





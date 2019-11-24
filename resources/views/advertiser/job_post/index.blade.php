@extends('layouts.app')
@section('content')
    @include('include.header._header')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    @include('include.sidebar._advertiser')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec">
                                <h3>Manage Jobs</h3>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Title</td>
                                        <td>Applications</td>
                                        <td>Created & Deadline</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if ($job_posts->count())
                                        @foreach ($job_posts as $post)
                                            <tr>
                                                <td>
                                                    <div class="table-list-title">
                                                        <h3><a href="#" title="">{{ $post->title }}</a></h3>
                                                        <span><i class="la la-map-marker"></i>{{ $post->location }}, {{ $post->country }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="applied-field">{{ $post->applicants->count() }} Applied</span>
                                                </td>
                                                <td>
                                                    <span>{{ $post->created_at->format('Y-m-d') }}</span><br />
                                                    <span>{{ $post->deadline }}</span>
                                                </td>
                                                <td>
                                                    <ul class="action_job">
                                                        <li><span>Applicants</span><a href="{{ route('advertiser.applicants',$post->uid) }}" title=""><i class="la la-users"></i></a></li>
                                                        <li><span>View Job</span><a href="{{ route('advertiser.job-posts.show', $post->uid) }}" title=""><i class="la la-eye"></i></a></li>
                                                        <li><span>Edit</span><a href="{{ route('advertiser.job-posts.edit', $post->uid) }}" title=""><i class="la la-pencil"></i></a></li>
                                                        <li><span>Delete</span><a onclick="event.preventDefault(); document.getElementById('delete-post-{{ $post->uid }}').submit();" title=""><i class="la la-trash-o"></i></a></li>
                                                        <form action="{{ route('advertiser.job-posts.destroy', $post->uid) }}" method="post" id="delete-post-{{ $post->uid }}">
                                                            @csrf @method('delete')
                                                        </form>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

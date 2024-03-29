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
                                <div class="extra-job-info">
                                    <span><i class="la la-clock-o"></i><strong>9</strong> Job Posted</span>
                                    <span><i class="la la-file-text"></i><strong>20</strong> Application</span>
                                    <span><i class="la la-users"></i><strong>18</strong> Active Jobs</span>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Title</td>
                                        <td>Applications</td>
                                        <td>Created & Expired</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="applied-field">3+ Applied</span>
                                        </td>
                                        <td>
                                            <span>October 27, 2017</span><br />
                                            <span>April 25, 2011</span>
                                        </td>
                                        <td>
                                            <span class="status active">Active</span>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="applied-field">3+ Applied</span>
                                        </td>
                                        <td>
                                            <span>October 27, 2017</span><br />
                                            <span>April 25, 2011</span>
                                        </td>
                                        <td>
                                            <span class="status active">Active</span>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="applied-field">3+ Applied</span>
                                        </td>
                                        <td>
                                            <span>October 27, 2017</span><br />
                                            <span>April 25, 2011</span>
                                        </td>
                                        <td>
                                            <span class="status">Inactive</span>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="applied-field">3+ Applied</span>
                                        </td>
                                        <td>
                                            <span>October 27, 2017</span><br />
                                            <span>April 25, 2011</span>
                                        </td>
                                        <td>
                                            <span class="status active">Active</span>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>View Job</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>

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

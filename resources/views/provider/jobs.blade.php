@extends('layouts.provider.app')
@section('title','Jobs')
@section('content')
<div class="content-area5">
                    <div class="dashboard-content">
                        @if ($message = Session::get('delete'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Manage Jobs</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index-2.html">Index</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="active">Manage Jobs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <div class="job-info job-info-2">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Job Titel</th>
                                        <th class="ds-none"></th>
                                        <th class="hdn">Date</th>
                                        <th>Applications</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $job)
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="my-properties-3" src="img/avatar/avatar-3.jpg" class="img-fluid"></a>
                                        </td>
                                        <td class="p-left-20">
                                            <div class="inner">
                                                <h5><a href="#">{{ $job->title }}</a></h5>
                                                <ul>
                                                    <li><i class="fa fa-money"></i> {{ $job->salary }} {{ $job->salary_type }}</li>
                                                    <li><i class="flaticon-pin"></i> {{ $job->city }} </li>
                                                    <li><i class="flaticon-time"></i> {{ $job->type }}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn"> {{ \Carbon\Carbon::parse($job->created_at)->diffforhumans() }}</td>
                                        <td>0 Applied</td>
                                        <td>
                                           @if($job->status == 0)
                                                Active
                                           @else 
                                                Closed
                                           @endif
                                        </td>
                                        <td class="actions">
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ route('delete.job',$job->id) }}"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p class="sub-banner-2 text-center">© 2019 Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
                </div>
@endsection
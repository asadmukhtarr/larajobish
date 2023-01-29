@extends('layouts.app')
@section('title','Jobs')
@section('content')

<!-- Sub banner start -->
<div class="sub-banner bg-color-full">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job Listing</h1>
            <ul class="breadcrumbs">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Job Listing</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- job listing section start -->
<div class="job-listing-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <!-- job box start -->
                <div class="job-box">
                    <form action="{{ route('apply.save',$job->id) }}" method="post">
                        @csrf
                        <label for="">Description</label>
                        <textarea class="form-control" rows="10" name="proposal">
                        </textarea>
                        <button type="submit" class="btn btn-danger">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job listing section end -->
@endsection
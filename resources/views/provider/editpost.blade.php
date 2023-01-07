@extends('layouts.provider.app')
@section('title','Edit Job')
@section('content')
<div class="content-area5 dashboard-content">
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="submit-address dashboard-list">
        <form method="post" action="{{ route('update.job', $job->id) }}">
            @csrf
            <h4 class="bg-grea-3">Edit Job Information</h4>
            <div class="search-contents-sidebar">
                <div class="row pad-20">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="title" value="{{ $job->title }}" class="input-text" placeholder="Your Title">
                            @error('title')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Job Type</label>
                            <select class="selectpicker search-fields" name="type">
                                <option value="">Job Type</option>
                                <option @if($job->type == 'Full time') Selected @endif>Full time</option>
                                <option @if($job->type == 'Part time') Selected @endif>Part time</option>
                                <option @if($job->type == 'Freelance') Selected @endif>Freelance</option>
                                <option @if($job->type == 'Temporary') Selected @endif>Temporary</option>
                            </select>
                            @error('type')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Job Category</label>
                            <select class="selectpicker search-fields" name="category">
                                <option>Job Type</option>
                                <option value="1" @if($job->category_id == '1') Selected @endif>Accounting / Finance</option>
                                <option value="2"  @if($job->category_id == '2') Selected @endif>Restaurant / Food Service</option>
                                <option value="3"  @if($job->category_id == '3') Selected @endif>Counseling</option>
                                <option value="4"  @if($job->category_id == '4') Selected @endif>Health Care</option>
                            </select>
                            @error('category')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" value="{{ $job->location }}" class="input-text" name="location" placeholder="Location">
                            @error('location')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="input-text" value="{{ $job->salary }}" name="salary" placeholder="USD">
                            @error('salary')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Salary Type </label>
                            <input type="text" value="{{ $job->salary_type }}" class="input-text" name="salary_type" placeholder="Salary Type">
                            @error('salary_type')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="selectpicker search-fields" name="country">
                                    <option value="">Country</option>
                                    <option @if($job->country == 'usa') Selected @endif>Usa</option>
                                    <option @if($job->country == 'Bangladesh') Selected @endif>Bangladesh</option>
                                    <option @if($job->country == 'Indea') Selected @endif>Indea</option>
                                    <option @if($job->country == 'Canada') Selected @endif>Canada</option>
                                </select>
                                @error('country')
                                <font color="red"><b>{{ $message }}</b></font>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label>City</label>
                                <select class="selectpicker search-fields" name="city">
                                    <option value="">City</option>
                                    <option @if($job->city == 'Dhaka') Selected @endif>Dhaka</option>
                                    <option @if($job->city == 'Dubai') Selected @endif>Dubai</option>
                                    <option @if($job->city == 'Mumbai') Selected @endif>Mumbai</option>
                                    <option @if($job->city == 'Califonia') Selected @endif>Califonia</option>
                                </select>
                                @error('city')
                                <font color="red"><b>{{ $message }}</b></font>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Job Description</label>
                            <textarea class="input-text" name="description" placeholder="Detailed Information">
                                {{ $job->description }}
                            </textarea>
                            @error('description')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="post-btn"><button type="submit" class="btn btn-md button-theme">Post a job</button></div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <p class="sub-banner-2 text-center">© 2019 Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
</div>
@endsection
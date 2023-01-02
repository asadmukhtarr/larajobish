@extends('layouts.provider.app')
@section('title','Create New Job')
@section('content')
<div class="content-area5 dashboard-content">
        @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
        @endif
    <div class="submit-address dashboard-list">
        <form method="post" action="{{ route('posts.job') }}">
            @csrf
            <h4 class="bg-grea-3">Basic Information</h4>
            <div class="search-contents-sidebar">
                <div class="row pad-20">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="title" class="input-text" placeholder="Your Title">
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
                                <option>Full time</option>
                                <option>Part time</option>
                                <option>Freelance</option>
                                <option>Temporary</option>
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
                                <option value="">Job Category</option>
                                <option value="1">Accounting / Finance</option>
                                <option value="2">Restaurant / Food Service</option>
                                <option value="3">Counseling</option>
                                <option value="4">Health Care</option>
                            </select>
                            @error('category')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="input-text" name="location" placeholder="Location">
                            @error('location')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="input-text" name="salary" placeholder="USD">
                            @error('salary')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Salary Type </label>
                            <input type="text" class="input-text" name="salary_type" placeholder="Salary Type">
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
                                    <option>Usa</option>
                                    <option>Bangladesh</option>
                                    <option>Indea</option>
                                    <option>Canada</option>
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
                                    <option>Dhaka</option>
                                    <option>Dubai</option>
                                    <option>Mumbai</option>
                                    <option>Califonia</option>
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
                            <textarea class="input-text" name="description" placeholder="Detailed Information"></textarea>
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
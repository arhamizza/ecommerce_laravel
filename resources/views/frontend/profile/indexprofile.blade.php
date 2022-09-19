@extends('layout.core')
@section('title', 'Profile')
@section('contents')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">User Details
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Name</b></label>
                            <div class="p-2 border">{{ Auth::user()->first_name }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Email</b></label>
                            <div class="p-2 border">{{Auth::user()->email}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Phone</b></label>
                            <div class="p-2 border">{{Auth::user()->telephone}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Address 1</b></label>
                            <div class="p-2 border">{{Auth::user()->address1}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Post Code</b></label>
                            <div class="p-2 border">{{Auth::user()->postcode}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Provinsi</b></label>
                            <div class="p-2 border">{{Auth::user()->village->district->regency->province->name}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Kota</b></label>
                            <div class="p-2 border">{{Auth::user()->village->district->regency->name}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Kecamatan</b></label>
                            <div class="p-2 border">{{Auth::user()->village->district->name}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Kelurahan</b></label>
                            <div class="p-2 border">{{Auth::user()->village->name}}</div>
                        </div>
                    </div>
                    <center class=""><a href="{{url('updateprofile')}}" class="btn btn-primary btn-icon-text float-left"><i class="btn-icon-prepend" data-feather="arrow-left"></i>update</a>
</center>
                </div>
                <a href="{{url('/')}}" class="btn btn-primary btn-icon-text float-left"><i class="btn-icon-prepend" data-feather="arrow-left"></i>back</a>

            </div>
        </div>
    </div>
</div>

@endsection
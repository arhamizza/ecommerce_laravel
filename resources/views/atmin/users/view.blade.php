@extends('layout.atmin')
@section('title', 'Registered User')
@section('contents')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">User Details
                        <a href="{{url('users')}}" class="btn btn-secondary btn-icon-text float-left"><i class="btn-icon-prepend" data-feather="arrow-left"></i>Kembali</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Role</b></label>
                            <div class="p-2 border">{{$users->role_as == '0'?'User':'Admin'}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Name</b></label>
                            <div class="p-2 border">{{$users->name}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Email</b></label>
                            <div class="p-2 border">{{$users->email}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Phone</b></label>
                            <div class="p-2 border">{{$users->telephone}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Address 1</b></label>
                            <div class="p-2 border">{{$users->address1}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Post Code</b></label>
                            <div class="p-2 border">{{$users->postcode}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Provinsi</b></label>
                            <div class="p-2 border">{{$users->village->district->regency->province->name}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Kota</b></label>
                            <div class="p-2 border">{{$users->village->district->regency->name}}</div>
                        </div>
                        {{-- <div class="col-md-4 mt-3">
                            <label for=""><b>Kecamatan</b></label>
                            <div class="p-2 border">{{$users->village->district->name}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for=""><b>Kelurahan</b></label>
                            <div class="p-2 border">{{$users->village->name}}</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

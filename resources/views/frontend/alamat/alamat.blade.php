@extends('layout.core')
@section('title', 'checkout')
@section('contents')
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Checkout</a></li>

        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                <form method="POST" action="{{ url('place-order') }}">
                    {{ csrf_field() }}
                    <h2 class="title">Checkout</h2>
                    <div class="so-onepagecheckout row">
                        <div class="col-left col-sm-3">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="account">
                                        <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">First
                                                Name</label>
                                            <input type="text" class="form-control firstname" id="input-payment"
                                                placeholder="First Name" value="{{ Auth::user()->first_name }}"
                                                name="fname">
                                            <span id="fname_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-lastname" class="control-label">Last
                                                Name</label>
                                            <input type="text" class="form-control lastname" id="input-payment-lastname"
                                                placeholder="Last Name" value="{{ Auth::user()->last_name }}"
                                                name="lname">
                                            <span id="lastname_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-email" class="control-label ">E-Mail</label>
                                            <input type="text" class="form-control email" id="input-payment-email"
                                                placeholder="E-Mail" value="{{ Auth::user()->email }}" name="email">
                                            <span id="email_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-telephone" class="control-label ">Telephone</label>
                                            <input type="text" class="form-control telephone"
                                                id="input-payment-telephone" placeholder="Telephone"
                                                value="{{ Auth::user()->telephone }}" name="telephone">
                                            <span id="telephone_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Alamat</label>
                                            <input type="text" class="form-control address1" id="input-payment-postcode"
                                                placeholder="address1" value="{{ Auth::user()->address1 }}" name="address1">
                                            <span id="address1_error" class="text-danger"></span>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="address" class="required">
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Post
                                                Code</label>
                                            <input type="text" class="form-control postcode" id="input-payment-postcode"
                                                placeholder="Post Code" value="{{ Auth::user()->post_code }}"
                                                name="postcode">
                                            <span id="postcode_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Alamat
                                                lengkap</label>
                                            <input type="text" class="form-control address2" id="input-payment-postcode"
                                                placeholder="address1" value="{{ Auth::user()->address2 }}"
                                                name="address2">
                                            <span id="address2_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-provinsi" class="control-label ">Provinsi</label>
                                            <select class="form-control provinsi" id="provinsi" name="provinsi">
                                                <option value="">Pilih Provinsi...</option>
                                                @foreach ($provinces as $provinsi)
                                                    <option value={{ $provinsi->id }}>{{ $provinsi->name }}</option>
                                                @endforeach
                                            </select>
                                            <span id="provinsi_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-kabupaten" class="control-label">Kabupaten
                                                / Kota</label>
                                            <select class="form-control kabupaten" id="kabupaten" name="kota">

                                                {{-- @foreach ($regencies as $kota)
                                  <option value={{$kota->id}}>{{$kota->name}}</option>
                                  @endforeach --}}
                                            </select>
                                            <span id="kabupaten_error" class="text-danger"></span>
                                        </div>


                                        {{-- <div class="form-group required">
                                            <label for="input-payment-kecamatan" class="control-label">Kecamatan</label>
                                            <select class="form-control kecamatan" id="kecamatan" name="kecamatan">
                                            </select>
                                            <span id="kecamatan_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-desa" class="control-label">Kelurahan /
                                                Desa</label>
                                            <select class="form-control kelurahan" id="desa" name="kelurahan">
                                            </select>
                                            <span id="kelurahan_error" class="text-danger"></span>
                                        </div> --}}
                                        <div class="buttons">
                                            <div class="pull-right"><a href="{{url('checkout')}}" class="btn btn-success">Checkout</a></div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <!--Middle Part End -->

        </div>
    </div>
    <!-- //Main Container -->
@endsection

@extends('layout.core')
@section('title', 'Update Profile')
@section('contents')

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Account</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div class="col-sm-9" id="content">
				<h2 class="title">My Account</h2>
				<p class="lead">Hello, <strong>{{ Auth::user()->name }} </strong> - To update your account information.</p>
				<form method="POST" action="{{ url('update-profile') }}">
                {{ csrf_field() }}
					<div class="row">
						<div class="col-sm-6">
							<fieldset id="personal-details">
								<legend>Personal Details</legend>
                                <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">First
                                                Name</label>
                                            <input type="text" class="form-control firstname" id="input-payment"
                                                placeholder="First Name" value="{{ Auth::user()->first_name }}"
                                                name="fname">
                                            <span id="fname_error" class="text-danger"></span>
                                        </div>
                                <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">Name Account</label>
                                            <input type="text" class="form-control firstname" id="input-payment"
                                                placeholder="First Name" value="{{ Auth::user()->name }}"
                                                name="name">
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
							<br>
						</div>
						<div class="col-sm-6">
							<fieldset>
								<legend>Your Address</legend>
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
                                        <div class="form-group required">
                                            <label for="input-payment-kecamatan" class="control-label">Kecamatan</label>
                                            <select class="form-control kecamatan" id="kecamatan" name="kecamatan">

                                                {{-- @foreach ($districts as $kecamatan)
                                  <option value={{$kecamatan->id}}>{{$kecamatan->name}}</option>
                                  @endforeach --}}
                                            </select>
                                            <span id="kecamatan_error" class="text-danger"></span>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-desa" class="control-label">Kelurahan /
                                                Desa</label>
                                            <select class="form-control kelurahan" id="desa" name="kelurahan">

                                                {{-- @foreach ($villages as $desa)
                                  <option value={{$desa->id}}>{{$desa->name}}</option>
                                  @endforeach --}}
                                            </select>
                                            <span id="kelurahan_error" class="text-danger"></span>
                                        </div>
							</fieldset>
						</div>
					</div>



					<div class="buttons clearfix">
						<div class="pull-right">
							<input type="submit" class="btn btn-md btn-primary" value="Save Changes">
						</div>
					</div>
				</form>
			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
				<div class="list-group">
					<ul class="list-item">
						<li><a href="login.html">Login</a>
						</li>
						<li><a href="register.html">Register</a>
						</li>
						<li><a href="#">Forgotten Password</a>
						</li>
						<li><a href="#">My Account</a>
						</li>
						<li><a href="#">Address Books</a>
						</li>
						<li><a href="wishlist.html">Wish List</a>
						</li>
						<li><a href="#">Order History</a>
						</li>
						<li><a href="#">Downloads</a>
						</li>
						<li><a href="#">Reward Points</a>
						</li>
						<li><a href="#">Returns</a>
						</li>
						<li><a href="#">Transactions</a>
						</li>
						<li><a href="#">Newsletter</a>
						</li>
						<li><a href="#">Recurring payments</a>
						</li>
					</ul>
				</div>
			</aside>
			<!--Right Part End -->
		</div>
	</div>
@endsection

@section('scripts')


@endsection

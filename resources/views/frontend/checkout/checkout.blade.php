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
		{{csrf_field()}}
			<h2 class="title">Checkout</h2>
			<div class="so-onepagecheckout row">
				<div class="col-left col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
						</div>
						<div class="panel-body">
							<div class="radio">
								<label>
									<input type="radio" value="register" name="account">
									Register Account</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" checked="checked" value="guest" name="account">
									Guest Checkout</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" value="returning" name="account">
									Returning Customer</label>
							</div>
						</div>
					</div>
					<div class="panel panel-default">

						<div class="panel-heading">
							<h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
						</div>
						<div class="panel-body">
							<fieldset id="account">
								<div class="form-group required">
									<label for="input-payment-firstname" class="control-label">First Name</label>
									<input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="{{ Auth::user()->first_name}}" name="fname">
								</div>
								<div class="form-group required">
									<label for="input-payment-lastname" class="control-label">Last Name</label>
									<input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="{{ Auth::user()->last_name}}" name="lname">
								</div>
								<div class="form-group required">
									<label for="input-payment-email" class="control-label">E-Mail</label>
									<input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{ Auth::user()->email}}" name="email">
								</div>
								<div class="form-group required">
									<label for="input-payment-telephone" class="control-label">Telephone</label>
									<input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{ Auth::user()->telephone}}" name="telephone">
								</div>
								<div class="form-group">
									<label for="input-payment-fax" class="control-label">Fax</label>
									<input type="text" class="form-control" id="input-payment-fax" placeholder="Fax" value="{{ Auth::user()->fax}}" name="fax">
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
									<label for="input-payment-postcode" class="control-label">Post Code</label>
									<input type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="{{ Auth::user()->post_code}}" name="postcode">
								</div>
								<div class="form-group required">
								<label for="input-payment-kabupaten" class="control-label">Kabupaten / Kota</label>
								<select class="form-control" id="kabupaten" name="kabupaten">

                                  {{-- @foreach ($regencies as $kota)
                                  <option value={{$kota->id}}>{{$kota->name}}</option>
                                  @endforeach --}}
								</select>
							  </div>
                              <div class="form-group required">
								<label for="input-payment-kecamatan" class="control-label">Kecamatan</label>
								<select class="form-control" id="kecamatan" name="kecamatan">

                                  {{-- @foreach ($districts as $kecamatan)
                                  <option value={{$kecamatan->id}}>{{$kecamatan->name}}</option>
                                  @endforeach --}}
								</select>
							  </div>
                              <div class="form-group required">
								<label for="input-payment-desa" class="control-label">Kelurahan / Desa</label>
								<select class="form-control" id="desa" name="desa">

                                  {{-- @foreach ($villages as $desa)
                                  <option value={{$desa->id}}>{{$desa->name}}</option>
                                  @endforeach --}}
								</select>
							  </div>
								<div class="checkbox">
									<label>
										<input type="checkbox" checked="checked" value="1" name="shipping_address">
										My delivery and billing addresses are the same.</label>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
				<div class="col-right col-sm-9">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default no-padding">
								<div class="col-sm-6 checkout-shipping-methods">
									<div class="panel-heading">
										<h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
									</div>
									<div class="panel-body ">
										<p>Please select the preferred shipping method to use on this order.</p>
										<div class="radio">
											<label>
												<input type="radio" checked="checked" name="Free Shipping">
												Free Shipping - $0.00</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="Flat Shipping Rate">
												Flat Shipping Rate - $7.50</label>
										</div>

									</div>
								</div>
								<div class="col-sm-6  checkout-payment-methods">
									<div class="panel-heading">
										<h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
									</div>
									<div class="panel-body">
										<p>Please select the preferred payment method to use on this order.</p>
										<div class="radio">
											<label>
												<input type="radio" checked="checked" name="Cash On Delivery">Cash On Delivery</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" name="Paypal">Paypal</label>
										</div>
									</div>
								</div>
							</div>



						</div>






						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon or Voucher?</h4>
								</div>
								<div class="panel-body row">
									<div class="col-sm-6 ">
										<div class="input-group">
											<input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
											<span class="input-group-btn">
												<input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
											</span>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="input-group">
											<input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
											<span class="input-group-btn">
												<input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<td class="text-center">Image</td>
													<td class="text-left">Product Name</td>
													<td class="text-left">Quantity</td>
													<td class="text-right">Unit Price</td>
													<td class="text-right">Total</td>
												</tr>
											</thead>

											@php
											$total = 0;
											$totalcheck = 0;
											@endphp
											@foreach ($cartitem as $item)
											<tbody>
												<tr>
													<td class="text-center"><a href="{{url('view-category/' .$item->products->kategori->slug. '/' .$item->products->slug) }}"><img width="60px" src="{{ asset('atmin/assets/uploads/produk/' . $item->products->image) }}" alt="{{$item->products->nama}}" title="{{$item->products->nama}}" class="img-thumbnail"></a></td>
													<td class="text-left"><a href="{{url('view-category/' .$item->products->kategori->slug. '/' .$item->products->slug) }}">{{$item->products->nama}}</a></td>
													<td class="text-center">{{$item->prod_qty}}</td>
													<td class="text-right">{{$item->products->selling_price}}</td>
													@php
													$total = $item->products->selling_price * $item->prod_qty;
													$totalcheck += $item->products->selling_price * $item->prod_qty;
													@endphp
													<td class="text-right">{{$total}}</td>
												</tr>
											</tbody>
											@endforeach
											<tfoot>
												<tr>
													<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
													<td class="text-right">$93.73</td>
												</tr>
												<tr>
													<td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
													<td class="text-right">$4.69.00</td>
												</tr>
												<tr>
													<td class="text-right" colspan="4"><strong>Eco Tax (-2.00):</strong></td>
													<td class="text-right">$3.75.00</td>
												</tr>
												<tr>
													<td class="text-right" colspan="4"><strong>VAT (20%):</strong></td>
													<td class="text-right">$19.68</td>
												</tr>
												<tr>
													<td class="text-right" colspan="4"><strong>Total:</strong></td>
													<td class="text-right">{{$totalcheck}}</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
								</div>
								<div class="panel-body">
									<textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
									<br>
									<label class="control-label" for="confirm_agree">
										<input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
										<span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
									<div class="buttons">
										<div class="pull-right">
											<input type="button" class="btn btn-primary" id="button-confirm" value="Confirm Order">
											<button type="submit" class="btn btn-primary w-100">Place Order</button>
										</div>
									</div>
								</div>
							</div>
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
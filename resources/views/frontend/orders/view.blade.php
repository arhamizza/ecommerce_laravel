@extends('layout.core')
@section('title', 'Detail Orders')
@section('contents')

<div class="main-container container">
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
                        <td style="width: 50%; vertical-align: top;" class="text-left">Order Detail</td>
							<td style="width: 50%; vertical-align: top;" class="text-left">Shipping  Address</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> 
                                <b>First Name:</b> {{$orders->fname}}
								<br>
                                <b>Last Name:</b> {{$orders->lname}}
								<br>
                                <b>Email:</b> {{$orders->email}}
								<br>
                                <b>No Hp:</b> {{$orders->telephone}}
								
							<td style="width: 50%;" class="text-left"> 
                                <b>Alamat:</b>{{$orders->address1}},
								<br>
                                <b>provinsi:</b>{{$orders->provinsi}},
								<br>
                                <b>kota:</b>{{$orders->kota}},
								<br>
                                <b>kecamatan:</b>{{$orders->kecamatan}},
								<br>
                                <b>kelurahan:</b>{{$orders->kelurahan}},
						</tr>
					</tbody>
				</table>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
                    @foreach ($orders->orderitems as $item)
						<thead>
							<tr>
								<td class="text-left">Product Name</td>
								<td class="text-right">Quantity</td>
								<td class="text-right">Price</td>
								<td class="text-right">Image</td>
								<td style="width: 20px;"></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">{{$item->products->nama}} </td>
								<td class="text-right">{{$item->qty}}</td>
								<td class="text-right">{{number_format($item->price)}}</td>
								<td class="text-right">                                            <img src="{{asset('atmin/assets/uploads/produk/'.$item->products->image)}}" width="90px" alt="{{$item->products->name}}" class="img-thumbnail"></td>
								<td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
								</td>
							</tr>

						</tbody>
                    @endforeach
						<tfoot>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">{{number_format($orders->total_price)}}</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="{{url('login')}}">Login</a>
		</li>
		<li><a href="r{{url('register')}}">Register</a>
		</li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>


@endsection

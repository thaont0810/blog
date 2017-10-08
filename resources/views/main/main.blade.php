

@extends('dashboard')
@section('content')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
								@foreach($slide as $sl)
					<!-- THE FIRST SLIDE -->
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
		            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
						<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="resource/image/slide/{{$sl->image}}" data-src="resource/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('resource/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
						</div>
					</div>

		        </li>
		        @endforeach

								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản Phẩm Mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($new_prod)}} sản phẩm mới</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($new_prod as $np)
								<div class="col-sm-3">
									<div class="single-item">
										@if($np->promotion_price != 0)
									<div class="ribbon-wrapper"><div class="ribbon sale">Giảm Giá</div></div>
									@endif
										<div class="single-item-header">
											<a href="{{route('product_detail',$np->product_id)}}"><img src="resource/image/PD/{{$np->product_image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$np->product_name}}</p>
											<p class="single-item-price">
											<p class="single-item-price">
												<span class="flash-del">{{$np->promotion_price}} </span>
												<span class="flash-sale">{{$np->unit_price}} VND</span>
											</p>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product_detail',$np->product_id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Bán Chạy</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($top_prod)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($top_prod as $tp)
								<div class="col-sm-3">
									<div class="single-item">
											
										<div class="single-item-header">
											<a href="{{route('product_detail',$tp->product_id)}}"><img src="resource/image/Product/top/{{$tp->product_image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$tp->product_name}}</p>
											<p class="single-item-price">
												<span>{{$tp->promotion_price}} VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('addtoCart',$tp->product_id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product_detail',$tp->product_id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class ='row text-center' style ="padding-top:20px;">{{$top_prod->links()}}</div>
							<div class="space40">&nbsp;</div>

						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

        @endsection
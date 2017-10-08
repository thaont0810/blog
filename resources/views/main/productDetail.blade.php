@extends('dashboard')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản Phẩm  {{$prod_detail->product_name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('index')}}">Trang Chủ</a> / <span>Thông Tin Chi Tiết</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="resource/image/PD/{{$prod_detail->product_image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$prod_detail->product_name}}</p>
								<p class="single-item-price">
                                <span class="flash-del">{{$prod_detail->promotion_price}} </span>
								<span class="flash-sale">{{$prod_detail->unit_price}} VND</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$prod_detail->product_description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								
								<select class="wc-select" name="color">
									<option>Số Lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô Tả</a></li>
							<li><a href="#tab-reviews">Nhận Xét (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
                        <p>{{$prod_detail->product_description}}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>Chưa có nhận xét nào </p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản Phẩm Liên Quan</h4>

						<div class="row">
                            @foreach($compa as $cp)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="resource/image/PD/{{$cp->product_image}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$cp->product_name}}</p>
										<p class="single-item-price">
                                        <span class="flash-del">{{$cp->promotion_price}} </span>
										<span class="flash-sale">{{$cp->unit_price}} VND</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
                        </div>
                        <div class="row text-center">{{$compa->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">SẢN PHẨM BÁN CHẠY</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach($top_prod as $tp)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="best_seller_1.html"><img src="resource/image/PD/{{$tp->product_image}}" alt="" width="55px" height="58px"></a>
                                <div class="media-body" style="color: #666; font-size: 14px">
                                    {{$tp->product_name}}<br>
                                    <span class="beta-sales-price" style="margin-right: 20px; color: #ff3366; font-weight: bold; font-size: 18px;">{{number_format($tp->unit_price)}} VND</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm mới</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                            @foreach($new_prod as $np)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="best_seller_1.html"><img src="resource/image/PD/{{$np->product_image}}" alt="" width="55px" height="58px"></a>
                                <div class="media-body" style="color: #666; font-size: 14px">
                                    {{$np->product_name}}<br>
                                    <span class="beta-sales-price" style="margin-right: 20px; color: #ff3366; font-weight: bold; font-size: 18px;">{{$np->unit_price}} VND</span>
                                </div>
                            </div>
                            @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection

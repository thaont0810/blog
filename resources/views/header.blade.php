<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> Cs1: Số 413 Thuỵ Khuê, Tây Hồ, Hà Nội</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 02466 863864 - 0898583838</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="{{route('signup')}}">Đăng kí</a></li>
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('index')}}" id="logo"><img src="resource/image/gofood.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="keyword" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (3) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@if(Session::has('cart'))
								@foreach($product_cart as $pr)
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="resource/image/PD/{{$pr['item']['product_image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">$pr['item']['product_name']</span>
											<span class="cart-item-amount">{{$pr['qty']}} * <span>{{$pr['item']['promotion_price']}}</span></span>
										</div>
									</div>
								</div>
								@endforeach
							@endif

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">15.777.000đ</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="shopping_cart.html" class="beta-btn primary text-center">Giỏ hàng<i class="fa fa-chevron-right"></i></a>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<!-- <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a> -->
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('index')}}">Trang chủ</a></li>
						<li><a href="#">Danh mục</a>
							<ul class="sub-menu">
								@foreach($category as $cate)
								<li><a href="{{route('category',$cate->cate_id)}}">{{$cate->cate_name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('news')}}">Tin tức</a></li>
						<li><a href="{{route('about')}}">Giới thiệu</a></li>
						<li><a href="{{route('contact')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
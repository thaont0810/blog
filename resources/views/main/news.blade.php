
@extends('dashboard')
@section('content')

<div class="inner-header">
<div class="container">
	<div class="pull-left">
		<h6 class="inner-title">TIN TỨC</h6>
	</div>
	<div class="pull-right">
		<div class="beta-breadcrumb font-large">
			<a href="{{route('index')}}">Trang chủ</a> / <span>Tin tức</span>
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
				@foreach($news as $new)
				<div class="col-sm-3">
					<a href="{{route('detail-news',$new->news_id)}}"><img src="resource/image/news/{{$new->news_img}}" alt=""></a>

				</div>
				<div class="col-sm-9">
					<div class="single-item-body">
						<p class="single-item-title">{{$new->header}}</p>
					</div>

					<div class="clearfix"></div>
					<div class="space20">&nbsp;</div>
					<div class="pull-left auto-width-left">
						<ul class="top-menu menu-beta l-inline">
							<li><a href=""><i class="fa fa-users"></i>{{$new->name}}</a></li>
							<li><a href=""><i class="fa fa-calendar"></i>{{$new->time_stamps}}</a></li>
							<li><a href=""><i class="fa fa-comments"></i> 0</a></li>					
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="space20">&nbsp;</div>

					<div class="single-item-desc">
						<p>{{$new->short_description}}</p>
					</div>

					<div class="clearfix"></div>
					<div class="space20">&nbsp;</div>
					<button type="button" class="btn btn-danger"><a href="{{route('detail-news',$new->news_id)}}">Xem Thêm</button>
					<div class="clearfix"></div>
					<div class="space20">&nbsp;</div>
					<div class="space20">&nbsp;</div>

				</div>
				@endforeach
			</div>
		</div>

		<div class="col-sm-3 aside">
			<div class="widget">
				<h3 class="widget-title">SẢN PHẨM BÁN CHẠY</h3>
				<div class="widget-body">
					<div class="beta-sales beta-lists">
						@foreach($top_prod as $tp)
						<div class="media beta-sales-item">
							<a class="pull-left" href="{{route('product_detail',$tp->id)}}"><img src="resource/image/PD/{{$tp->image}}" alt="" width="55px" height="58px"></a>
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
							<a class="pull-left" href="{{route('product_detail',$np->id)}}"><img src="resource/image/PD/{{$np->image}}" alt="" width="55px" height="58px"></a>
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
	
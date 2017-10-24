@extends('dashboard')
@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('index')}}">Trang chủ</a> / <span>Tin Tức</span>
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
						<div >
							<div class="single-item-body">
								<p class="single-item-title"><h5>{{$new[0]->header}}</h5></p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>
							<div class="pull-left auto-width-left">
								<ul class="top-menu menu-beta l-inline">
									<li><a href=""><i class="fa fa-users"></i>{{$new[0]->name}}</a></li>
									<li><a href=""><i class="fa fa-calendar"></i>{{$new[0]->time_stamps}}</a></li>
									<li><a href=""><i class="fa fa-comments"></i> 0</a></li>
									
									
								</ul>
							</div>
							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>
							<div>
								<!-- <center><img src="resource\image\news\Xuong-ca-hoi-nauy_1.jpg" alt=""></center> -->
								<center><img src="resource\image\news\{{$new[0]->news_img}}" alt=""></center>

							</div>
							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<!-- {{$new[0]->content}} -->
								{!! $new[0]->content !!}


							</div>
							<!-- <div class="single-item-desc">
								<p>SIÊU KHUYẾN MẠI: Xương, đầu và lườn cá hồi Na Uy giá chỉ 49.000 VNĐ/1kg.</p>

								<p>Ngày nay, nhu cầu sử dụng xương cá hồi Nauy về làm ruốc, nấu cháo và chế biến những món ăn ngon từ cá hồi như canh chua,…ngày càng nhiều. Bởi thế mà gofood đã đi đầu trong việc cung cấp xương cá hồi tươi tại Hà Nội. Xương cá hồi tại Gofood sạch ngon không tưởng với chất lượng tốt…</p>
								<h6>Khuyến mãi khủng xương cá hồi Nauy tươi tại Hà Nội</h6>
								<p>Dẫn đầu trong việc cung cấp xương cá hồi tươi tại Hà Nội, chúng tôi hiểu bạn cần những món ăn giàu dinh dưỡng nhất cho bé. Chính vì thế việc sử dụng các sản phẩm về xương cá hồi Nauy tươi là điều thiết yếu. Xương cá hồi Nauy với những dưỡng chất quan trọng bậc nhất như Omega 3, DHA,…một loại lipit quan trọng trong thịt và xương cá hồi giúp bé thông minh, phát triển trí não cũng như thị lực một cách nhanh chóng hơn bất cứ sản phẩm nào khác.</p><br>
								<div>
									<center><img src="resource\image\news\mon-ngon-tu-xuong-ca-hoi-nauy.jpg" alt=""></center>
								</div><br>
								<p>Mỗi tuần Gofood luôn triển khai chương trình khuyến mãi khủng cho sản phẩm xương cá hồi Nauy tươi để phục vụ nhu cầu cho mọi thực khách. Không chỉ vậy xương cá hồi tươi của gofood vẫn giữ nguyên hàm lượng dinh dưỡng vốn có của cá hồi Nauy cao cấp bởi đặc thù sản phẩm này được nhập khẩu nguyên con và vận chuyển trực tiếp qua sân bay nội bài, chúng tôi kết hợp chặt chẽ với hãng Leroy – hãng chế biến và sản xuất cá hồi Nauy nổi tiếng toàn Châu Âu.</p>
								<p>Quý vị hãy nhanh tay đặt hàng bởi chúng tôi có rất nhiều chương trình khuyến mãi “khủng” vì có những dịp khách hàng đặt cá hồi Fillet lên tới 150kg. Đi theo số lượng nhập khẩu lớn về cá hồi nguyên con, chúng tôi khuyến mãi cực lớn về sản phẩm đi kèm là xương cá hồi tươi để phục vụ thực khách. Có những đợt giảm giá chỉ còn 60k/1kg xương cá hồi (bao gồm lưng vây, lườn và vụn thịt cá hồi,..). Với sản phẩm tươi ngon bậc nhất và dịch vụ chăm sóc khách hàng chu đáo chắc chắn xương cá hồi tươi của gofood sẽ khiến bạn hài lòng.</p>
								<h6>Làm món gì với xương cá hồi Nauy?</h6>
								<p>Cá món ăn từ xương cá hồi rất phong phú và đa dạng nhé! Theo kinh nghiệm của nhiều bà nội trợ Việt thì xương cá hồi rất phù hợp cho món canh chua, lẩu cá hồi, canh riêu với cà chua và đặc biệt là món cháo xương cá hồi cho bé. Cháo xương cá hồi thơm ngon, dễ nấu lại có giá cả phải chăng lên được rất nhiều bà mẹ Việt Nam tin dùng.</p><br>
								<div>
									<center><img src="resource\image\news\mon-ngon-tu-xuong-ca-hoi-nauy-01.jpg" alt=""></center>
								</div><br>
								<p>Xương cá hồi tươi ngon, cao cấp với độ dinh dưỡng cao nhất dễ nấu, dễ chế biến cho mọi món ngon nhà làm chắc chắn sẽ làm hài lòng. <br>

									Hãy liên hệ ngay thực phẩm cao cấp Gofood để mua được xương cá hồi tươi ngon nhất!<br>

									Hãy cùng Gofood chung tay vì một thương hiệu sạch ngon không tưởng nhé !</p>

							</div> -->
								<div class="space20">&nbsp;</div>
								<div class="clearfix"></div>

								<!-- <b><p style="">Xem thêm</p></b>
								<a href="news1.html">KHUYẾN MÃI CỰC SỐC XƯƠNG CÁ HỒI NAUY CAO CẤP</a><br>
								<a href="news1.html">KHUYẾN MÃI CỰC SỐC XƯƠNG CÁ HỒI NAUY CAO CẤP</a>
								<div class="space20">&nbsp;</div>
								<div class="clearfix"></div><hr> -->

								<p>Hotline: 0466 863 864- 0898 58 2828- 0898 58 3838 <br>
								GOFOOD - SẠCH NGON KHÔNG TƯỞNG <br>
								Sô 413 Thụy Khuê, Tây Hồ, Hà Nội</p>
								<div class="space20">&nbsp;</div>
								<div class="clearfix"></div><hr>
								<b><h6>Bình luận</h6></b>
								<div class="row">
									<div class="col-sm-8">
										<div class="row">
											<div class="col-sm-11"><input name="your-name" type="text" placeholder="Bình luận"></div>
											<div class="col-sm-1"><button type="button" class="btn btn-success"><a href=#>Đăng</button></div>
										</div>
									</div>
									<div class="col-sm-4"></div>
								</div>
							</div>

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
								{{$tp->name}}<br>
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
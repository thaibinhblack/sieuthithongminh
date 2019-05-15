<form method="POST" action="thanhtoan">
<section class="cart-header">
        <div class="container">
            <div class="row">
                <h3 class="title-direction">
                    <a href="/">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="">Giỏ hàng</a>
                </h3>
                <div class="title-cart">Giỏ hàng</div>
            </div>        
        </div>
</section>
<div class="modal fade" id="myModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Nhập thông tin </h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="group-form">
					<label class="label-control">Họ và Tên</label>
					<input name="USERNAME" type="text" class="form-control" placeholder="Nhập họ tên" required />
				</div>
				<div class="group-form">
					<label class="label-control">Số điện thoại</label>
					<input name="USER_PHONE" type="text" class="form-control" placeholder="Nhập họ tên" required />
				</div>
				<div class="group-form">
					<label class="label-control">Địa chỉ</label>
					<input name="USER_ADDRESS" type="text" class="form-control" placeholder="Nhập họ tên" required />
				</div>
				<div class="group-form">
					<label class="label-control">Email</label>
					<input name="USER_EMAIL" type="Email" class="form-control" placeholder="Nhập họ tên" required />
				</div>
				
			</div>
			
			<!-- Modal footer -->
			<div class="modal-footer" >
				<button type="submit" class="btn btn-info" >Thanh toán</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			
			</div>
		</div>
	</div>
<section class="cart-body">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="wrapper-cart">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<?php $total = 0; ?>
					@foreach ($carts as $cart)
					<div class="order-cart">
							<input name="ID_SANPHAM[]" type="hidden" class="ID_SP" value="{{$cart['product']->ID_SP}}" />
							<img src="{{$cart['product']->getImage[0]->DUONGDAN}}" class="img-responsive">
							<div class="info-cart">
								<div class="cart-name">
								<p class="h4">{{$cart['product']->TEN_SP}}</p>
								</div>
								<div class="cart-price">
								<p class="cart-price-first">{{number_format($cart['product']->GIA_SP)}} <small>vnđ</small></p>
								<input type="hidden" class="input_price" name="input_price" value="{{$cart['product']->GIA_SP}}"></p>
								</div>
								<div class="cart-weight">
									<div class="weight-fas">
										<div class="inner-weight">
											<p>{{$cart['product']->DONVI_SP}}</p>
											<div class="counter-weight">
												<i class="fa fa-caret-left decrement-weight" aria-hidden="true"></i>
												@if ($cart['product']->DONVI_SP == 'KG')
													<input name="soluong[]" class="count-weight" value="{{$cart['soluong']}}" step="0.1">
												@else
												<input name="soluong[]" class="count-weight" value="{{$cart['soluong']}}" step="1">
												@endif
												
												<i class="fa fa-caret-right increment-weight" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="cart-price">
									<?php $total = $total + ($cart['product']->GIA_SP * $cart['soluong']); ?>
								<p class="cart-price-last"> <span>{{number_format($cart['product']->GIA_SP * $cart['soluong'])}} <small>vnđ</small></span>
									</p>
								</div>
							</div>
							<div class="button-cart">
							<form method="GET" action="/deletecart">
								<input type="hidden" name="ID_SP" value="{{$cart['product']->ID_SP}}" />
									<button type="submit" title="Xóa" class="delete-cart-product" style="background:transparent;border:none;">
										<i class="fa fa-times" aria-hidden="true"></i>
									</button>
							</form>
							</div>
						</div>
					@endforeach
				
				</div>
				<div class="control-cart">
					<a href="index.html" class="continue-shopping"><i class="fa fa-arrow-left" aria-hidden="true"></i> Tiếp tục mua hàng</a>
					<a href="/deleteallcart">Xóa giỏ hàng</a>
					<a href="#" class="update-cart">Cập nhật giỏ hàng</a>
				</div>
			</div>
			<div class="col-md-4">
				
					<div class="cart-total">
						<p class="h4">Tổng tiền</p>
						<div class="subtotals">
							<p>
								<span>Tạm tính </span>
								<span class="subtotals-count">$ 499</span>
							</p>
						</div>
						<div class="ship">
							<p>
								<span>Ship</span>
							</p>
							<div class="ship-form">
								@foreach ($ptvc as $pt)
								<input type="radio" name="ship" id="ship_1" checked value="{{$pt->ID_PHUONGTHUC}}">
								<label for="ship_1">{{$pt->PHUONG_THUC}}</label>
								@endforeach
								
							
								
							</div>
						</div>
						<div class="order-total">
							<p class="h4">
								<span>Thành tiền </span>
								<span class="subtotals-count-child">{{number_format($total)}} <small>vnđ</small></span>
							</p>
						</div>
						<button type="button" data-toggle="modal" data-target="#myModal" class="success-total-child">Thanh toán</button>
					</div>
				
			</div>
		</div>
	</div>	
</section>


	  

</form>
	
	
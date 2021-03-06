<div class="row">
        <div class="filter col-md-3">
            <select class="form-control selector">
                <option value="0" selected>Xem</option>
                <option value="1">Các Sản Phẩm Giảm Giá</option>
                <option value="2">Các Sản Phẩm Tặng Qùa</option>
                <option value="3">Các Sản Phẩm Giảm Giá + Tặng Qùa</option>
            </select>
        </div>
        @if(!empty($theloai))
        <div class="filter col-md-2">
            
                <select class="form-control selector_theloai">
                    @foreach ($theloais as $theloai)
                <option value="{{$theloai->ID_LOAISP}}">{{$theloai->LOAI_SAN_PHAM}}</option>
                    @endforeach
                    
                </select>
            </div>
        @endif
        <div class="filter col-md-2">
            <button class="btn btn-info btn-filter">Áp dụng</button>
        </div>
        <br/>
        <div class="col-md-12" style="padding-top:15px;">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">THÔNG TIN SẢN PHẨM</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            
                            <tr>
                                <th class="id_sanpham">
                                    <span class="name">#</span>
                                    <input class="check checkall" type="checkbox" value="-1"  style="display:none;"/>
                                </th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ SP</th>
                                <th>TÌNH TRẠNG</th>
                               
                                <th>TIME</th>
                                <th>ACTIONI</th>
                                
                            </tr>
                            <?php $count = 1; ?>
                            @foreach ($products as $product)
                                <tr>
                                    <th class="id_sanpham">
                                    <span class="name">{{$product->ID_SP}}</span>
                                        <input class="check checkall" type="checkbox" value="-1"  style="display:none;"/>
                                    </th>
                                    <th>{{$product->TEN_SP}}</th>
                                    <th>{{$product->SOLUONG}}</th>
                                    <th>{{number_format($product->GIA_SP)}}<small>đ</small>/{{$product->DONVI_SP}}</th>
                                    <th>
                                        @if($product->TINH_TRANG == 0)
                                            Bình Thường
                                        @elseif($product->TINH_TRANG == 1)
                                            Hàng Mới Về
                                        @elseif($product->TINH_TRANG == 2)
                                            Bán Chạy
                                        @elseif($product->TINH_TRANG == 3)
                                            Sắp Hết Hàng
                                        @elseif($product->TINH_TRANG == 4)
                                            Xã Hàng
                                        @elseif($product->TINH_TRANG == 5)
                                            Tồn Kho
                                        @else
                                            Hết Hàng
                                        @endif
                                    </th>
                                    
                                    <th>{{date($product->created_at)}}</th>
                                    <th><a href="/admin?page=product&action=chitiet&id={{$product->ID_SP}}"><span class="lnr lnr-eye"></span></a></th>

                                </tr>
                                <?php $count = $count+1; ?>
                            @endforeach
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC TABLE -->
        </div>
       
    </div>
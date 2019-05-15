<form method="POST" class="row" action="/product/update" enctype="multipart/form-data">
    <div class="col-md-9">
        <label>Tên Sản Phẩm</label>
        <input type="hidden" name="ID_SP" value="{{$product_detail->ID_SP}}" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="TEN_SP" class="form-control" value="{{$product_detail->TEN_SP}}" />
        <br/>
        <textarea name="MOTA" id="editor" style="padding-top:15px;" value="{{$product_detail->MOTA}}">{{$product_detail->MOTA}} </textarea>
        <label class="label-control col-md-2" style="padding-left:0 !important;">Số Lượng</label>
        <input style="max-width:100px;margin-bottom:15px;" step="1" type="number" name="SOLUONG" min="0" value="{{$product_detail->SOLUONG}}"  required/>
        <br/>
        <label class="label-control col-md-2" style="padding-left:0 !important;">Giá </label> 
        <input style="margin-bottom:15px;" type="number" min="1000" step="500" name="GIA_SP" value="{{$product_detail->GIA_SP}}" />
        <br/>
        <label class="label-control col-md-2" style="padding-left:0 !important;">Đơn vị </label>
        <input style="margin-bottom:15px;" type="text" class="" name="DONVI_SP" value="{{$product_detail->DONVI_SP}}" /><br/> 
        <label class="label-control">Tình Trạng</label><br/>
        <select class="form-control col-md-5" style="width:40%;" name="TINH_TRANG">
            @if($product_detail->TINH_TRANG == 0)
                <option  value="0" selected>Bình Thường</option>
            @elseif($product_detail->TINH_TRANG == 1)
                <option selected value="1">Hàng Mới Về</option>
            @elseif($product_detail->TINH_TRANG == 2)
                <option selected value="2">Bán Chạy</option>
            @elseif($product_detail->TINH_TRANG == 3)
                <option selected value="3">Sắp Hết Hàng</option>
            @elseif($product_detail->TINH_TRANG == 4)
                <option selected value="4">Xã Hàng</option>
            @elseif($product_detail->TINH_TRANG == 5)
                <option selected value="5">Tồn Kho</option>
            @else
                <option selected value="6">Hết Hàng</option>
            @endif
            <option value="0">Bình Thường</option>
            <option value="1">Hàng Mới Về</option>
            <option value="2">Bán Chạy</option>
            <option value="3">Sắp Hết Hàng</option>
            <option value="4">Xã Hàng</option>
            <option value="5">Tồn Kho</option>
            <option value="6">Hết Hàng</option>
        </select><br/>
        <label class="label-control" style="display:inline-block;width:100%;margin-top:15px;">Hình ảnh sản phẩm</label>
        <div class="col-md-12 row">
            <div class="col-md-3" style="padding-left:0 !important;">
                <select class="form-control option-product">
                    <option value="0">Xem</option>
                    <option value="1">Xóa</option>
                </select>
            </div>
            <div class="col-md-3" style="padding-left:0 !important;">
                <select class="form-control option-check">
                    <option value="0">Chọn từng cái</option>
                    <option value="1">Chọn tất cả</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info btn-option">Áp dụng</button>
            </div>
        </div>
        @foreach ($images as $image)
            <div class="col-md-4 item-image">
            <input class="checkimage" type="checkbox" value="{{$image->ID_HINHANH}}" />
            <button class="btn-delete" value="{{$image->ID_HINHANH}}"><span class="lnr lnr-magic-wand"></span></button>
                <img class="image-product" src="{{$image->DUONGDAN}}" />
            </div>
        @endforeach
    </div>
    <div id="sidebar-nav" class="col-md-3 sidebar-left">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li class="active">
                        <a href="#subcat" data-toggle="collapse" class=" active"><i class="lnr lnr-cart" > </i> <span>Thể Loại</span> <i class="icon-submenu lnr lnr-chevron-left" ></i></a>
                        <div id="subcat" class="collapse in" aria-expanded="true">
                            <ul class="nav">
                                <li>
                                    @if($product_detail->ID_LOAISP == 1)
                                        <input name="cat" class="check_cat" type="checkbox" checked value="1">
                                    @else
                                        <input name="cat" class="check_cat" type="checkbox" value="1">
                                    @endif
                                     Chưa phân loại
                                </li>
                                @foreach ($theloais as $theloai)
                                    <li>
                                        @if ($product_detail->ID_LOAISP == $theloai->ID_LOAISP)
                                            <input name="cat" class="check_cat" type="checkbox" value="{{$theloai->ID_LOAISP}}" checked> 
                                        @else
                                        <input name="cat" class="check_cat" type="checkbox" value="{{$theloai->ID_LOAISP}}" > 
                                        @endif
                                        
                                        {{$theloai->LOAI_SAN_PHAM}}</li>
                                @endforeach
                                <li data-toggle="modal" data-target="#theloai" >Thêm thể loại mới</li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                <ul class="nav">
                        <li class="active">
                            <a href="#subimage" data-toggle="collapse" class=" active"><i class="lnr lnr-license" > </i> <span>Hình Ảnh</span> <i class="icon-submenu lnr lnr-chevron-left" ></i></a>
                            <div id="subimage" class="collapse in" aria-expanded="true">
                                <ul class="nav">
                                   <li class="upload">
                                       <button class="btn-upload"><span class="lnr lnr-cloud-upload"></span></button>
                                       <input  class="file-upload" type="file" name="fileimage[]" multiple/>
                                    </li>
                                    <li class="list-pic"></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                    <ul class="nav">
                            <li class="active">
                                <a href="#subcat" data-toggle="collapse" class=" active"><i class="lnr lnr-license" > </i> <span>Tác Vụ</span> <i class="icon-submenu lnr lnr-chevron-left" ></i></a>
                                <div id="subcat" class="collapse in" aria-expanded="true">
                                    <ul class="nav">
                                       <li class="upload col-md-12">
                                           <button type="submit" class="btn btn-info btn-edit">Save</button>
                                       <button class="btn btn-danger"><a href="{{url('/product/delete')}}/{{$product_detail->ID_SP}}"> Delete</a></button>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>    
            </nav>
        </div>
    </div>
</form>
@if(Session()->has('success'))
    <small class="text-align:center;">{{Session()->get('success')}}</small>
@endif
<form method="POST" action="/sanpham" class="row" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-9">
        
        <input name="TENSP" class="form-control" type="text" placeholder="Tên sản phẩm" required/><br/>
        <textarea name="MOTA" value="" id="editor" style="padding-top:15px;" required></textarea>
        <label class="label-control col-md-2" style="padding-left:0 !important;">Số Lượng</label>
        <input style="max-width:100px;margin-left:15px;margin-bottom:15px;" step="1" type="number" name="SOLUONG" min="0" value="0"  required/>
        <br/>
        <label class="label-control col-md-2" style="padding-left:0 !important;">Giá </label>
        <input style="margin-left:15px;margin-bottom:15px;" type="number" min="500" step="500" value="0" class="" name="GIA_SP" /><br/>
        <label class="label-control col-md-2" style="padding-left:0 !important;">Đơn vị </label>
        <input style="margin-left:15px;margin-bottom:15px;" type="text" class="" name="DONVI_SP" value="KG" /><br/> 
        <label class="label-control">Tình Trạng</label><br/>
       
        <select class="form-control col-md-5" style="width:40%;" name="TINH_TRANG">
            <option value="0">Bình Thường</option>
            <option value="1">Hàng Mới Về</option>
            <option value="2">Bán Chạy</option>
            <option value="3">Sắp Hết Hàng</option>
            <option value="4">Xã Hàng</option>
            <option value="5">Tồn Kho</option>
            <option value="6">Hết Hàng</option>
        </select>
        <br/>
        <div class="row col-md-12" style="padding-left:0 !important;margin-top:15px;">
            <div class="col-md-6">
            <label class="label-control">Sản Phẩm có khuyến mãi?</label><br/>
        
            <select class="form-control option-khuyenmai col-md-5" style="width:40%;" name="TINH_TRANG">
                <option value="0">Không</option>
                <option value="1">Có</option>
            </select>
            </div>
            <div class='col-md-6 box-km'>
           
               
            </div>
        </div>
        <br/>
        <input style="opacity:0" type="text" class="ID_DAILY" value="{{Session()->get('account.ID_DAILY')}}"/>
       
    </div>

    <div id="sidebar-nav" class="col-md-3 sidebar-left">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li class="active">
                        <a href="#subcat" data-toggle="collapse" class=" active"><i class="lnr lnr-cart" > </i> <span>Thể Loại</span> <i class="icon-submenu lnr lnr-chevron-left" ></i></a>
                        <div id="subcat" class="collapse in" aria-expanded="true">
                            <ul class="nav">
                                <li><input name="cat" class="check_cat" type="checkbox" checked value="1"> Chưa phân loại</li>
                                @foreach ($theloais as $theloai)
                                    <li><input name="cat" class="check_cat" type="checkbox" value="{{$theloai->ID_LOAISP}}"> {{$theloai->LOAI_SAN_PHAM}}</li>
                                @endforeach
                                <li data-toggle="modal" data-target="#theloai" >Thêm thể loại mới</li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                <ul class="nav">
                        <li class="active">
                            <a href="#subcat" data-toggle="collapse" class=" active"><i class="lnr lnr-license" > </i> <span>Hình Ảnh</span> <i class="icon-submenu lnr lnr-chevron-left" ></i></a>
                            <div id="subcat" class="collapse in" aria-expanded="true">
                                <ul class="nav">
                                   <li class="upload">
                                       <button class="btn-upload"><span class="lnr lnr-cloud-upload"></span></button>
                                       <input  class="file-upload" type="file" name="fileimage[]" multiple required/>
                                    </li>
                                    <li class="list-pic row"></li>
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
                                           <button type="submit" class="btn btn-info">Save</button>
                                          
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>    
            </nav>
        </div>
    </div>
</form>

<div class="modal" id="theloai">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">THÊM LOẠI SẢN PHẨM</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="POST" action="/theloai">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- Modal body -->
            <div class="modal-body">
                
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="label-control">Loại Sản Phẩm</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" placeholder="Tên loại sản phẩm" required />
                        </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-md-3">
                                <label class="label-control">Mô Tả</label>
                            </div>
                            <div class="col-md-9">
                                
                                <textarea name="MO_TA" class="form-control" placeholder="Tên loại sản phẩm" style="height:150px;"></textarea>
                            </div>
                    </div>

                
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info" >Save</button>
                
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
          </div>
</div>
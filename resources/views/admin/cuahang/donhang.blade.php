<div class="row">
        {{-- <div class="filter col-md-3">
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
        <br/> --}}
        <div class="col-md-12" style="padding-top:15px;">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">THÔNG TIN ĐƠN HÀNG</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            
                            <tr>
                                <th class="id_sanpham">
                                    <span class="name">#</span>
                                    <input class="check checkall" type="checkbox" value="-1"  style="display:none;"/>
                                </th>
                                <th>TÊN KHÁCH HÀNG</th>
                                
                                <th>HÌNH THỨC THANH TOÁN</th>
                                <th>PHƯƠNG THÚC VẬN CHUYỂN</th>
                                <th>TÌNH TRẠNG</th>
                               
                                <th>THỜI GIAN ĐẶT HÀNG</th>
                                <th>ACTION</th>
                                
                            </tr>
                            <?php $count = 1; ?>
                            @foreach ($donhangs as $donhang)
                                <tr>
                                    <th class="id_sanpham">
                                    <span class="name">{{$count}}-{{$donhang->ID_DONHANG}}</span>
                                        <input class="check checkall" type="checkbox" value="-1"  style="display:none;"/>
                                    </th>
                                    
                                    <th>{{$donhang->TEN_DONHANG}}</th>
                                    
                                    <th>{{$donhang->HINHTHUC_THANHTOAN}}</th>
                                    <th>{{$donhang->PHUONG_THUC}}</th>
                                    <th>{{$donhang->MOTA_TRANGTHAI}}</th>
                                    <th>{{$donhang->THOI_GIAN_DAT_HANG}}</th>
                                    
                                    <th><a href="/admin/donhang/{{$donhang->ID_DONHANG}}"><span class="lnr lnr-eye"></span></a></th>

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

    <div class="modal" id="infodonhang">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" action="/daily/update">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Modal body -->
                <div class="modal-body">
                    
                        
                    
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" >CẬP NHẬT</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
              </div>
        </div>
    </div>
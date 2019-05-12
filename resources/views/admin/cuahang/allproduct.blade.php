<div class="row">
        <div class="filter col-md-2">
            <select class="form-control selector">
                <option value="0" selected>Xem</option>
                <option value="1">Tác Vụ</option>
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
                                    <span class="name">ID</span>
                                    <input class="check checkall" type="checkbox" value="-1"  style="display:none;"/>
                                </th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>SỐ LƯỢNG</th>
                                <th>TÌNH TRẠNG</th>
                                <th>MÔ TẢ</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC TABLE -->
        </div>
       
    </div>
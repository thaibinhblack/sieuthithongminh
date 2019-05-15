<div class="main-content">
        <div class="container-fluid">
        <div class="row">
                <div class="col-md-6">
                @foreach ($donhang as $dh)
                    
                
               
                    <label> Tên Sản Phẩm </label>
                    <input type="text" class="form-control" disabled value="{{$dh->TEN_SP}}" />
                    <label>Hình ảnh sản phẩm</label>
                    <div class="row">
                        @foreach ($dh->getImage as $item)
                            
                        
                            <div class="col-md-6">
                                {{$item->DUONGDAN}}
                            </div>
                        @endforeach
                    </div>
                    <label>Số Lượng Mua</label>
                    <input class="form-control" disabled value="{{$dh->SOLUONG_SP}}" />
                    <label>NGÀY MUA</label>
                    <input type="text" class="form-control" value="{{$dh->THOI_GIAN_DAT_HANG}}" disabled />
                @endforeach
            </div>
        </div>
    </div>
</div>
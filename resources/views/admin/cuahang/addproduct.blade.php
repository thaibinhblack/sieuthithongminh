
<form method="POST" action="/sanpham" class="row" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-9">
        
        <input name="TENSP" class="form-control" type="text" placeholder="Tên sản phẩm" /><br/>
        <textarea name="MOTA" id="editor" style="padding-top:15px;"></textarea>
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
                                       <input  class="file-upload" type="file" name="fileiamge" multiple/>
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
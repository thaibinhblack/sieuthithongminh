<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3 box-profile-left">
                <h4>Trang Cá Nhân</h4>
               
                <ul class="menu-profile nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#info">Thông tin cá nhân</a></li>
                    @if($daily != NULL)
                        <li><a data-toggle="tab" href="#infodaily">Thông Tin Đại Lý</a></li>
                    @endif
                    <li><a data-toggle="tab" href="#password">Đổi mật khẩu</a></li>
                    <li><a href="/logout">Đăng xuất</a></li>
                    @if($account->QUYEN != 0)
                    <li><a href="/admin?page=product">Quản trị</a></li>
                    @endif
                  
                </ul>
            </div>
            <div class="col-md-9">
               
                <div class="tab-content" style="background:#fff;padding:25px;">
                        @if(session()->has('success'))
                            <small style="display:inline-block;width:100%;text-align:center;">{{session()->get('success')}}</small>
                        @endif
                        @if(session()->has('Error'))
                            <p style="display:inline-block;width:100%;text-align:center;color:red;padding:15px 0;">{{session()->get('Error')}}</p>
                        @endif
                    <div id="info" class="tab-pane fade show in active">
                       
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                <small>{{ session('Message') }}</small>
                                
                            </div>
                        @endif 
                        <form method="POST" action='/account/{{$account->ID_USER}}' enctype="multipart/form-data" >
                                <input type="hidden" name="id" value="{{$account->ID_USER}}" />
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="info-profile bg-white">
                                    <div class="avatar-wrapper">
                                       
                                        @if($account->AVATAR != NULL)
                                    <img class="profile-pic" src="{{url('/')}}/{{$account->AVATAR}}" />
                                        @else
                                            <img class="profile-pic" src="{{asset('avatar/TT.jpg')}}" />
                                        @endif
                                        
                                        <div class="upload-button">
                                            <button><i class="fa fa-2x fa-file-upload"></i></button>
                                            <input class="file-upload" name="avatar" type="file" accept="image/*"/>
                                        </div>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="main-info-profile">
                                        
                                        
                                            <div class="group-info row">
                                                <div class="col-md-2">
                                                    <label class="label-control">USERNAME</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input name="username" class="form-control" type="text" value="{{$account->USERNAME}}" placeholder="USERNAME"/>
                                                </div>
                                            </div>
                                            <div class="group-info row">
                                                <div class="col-md-2">
                                                    <label class="label-control">EMAIL</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input disabled name="email" class="form-control" type="text" value="{{$account->EMAIL}}" placeholder="EMAIL"/>
                                                </div>
                                            </div>
                                            <div class="group-info row">
                                                <div class="col-md-2">
                                                    <label class="label-control">QUYỀN</label>
                                                </div>
                                                <div class="col-md-10">
                                                    @if($account->QUYEN == 0)
                                                        USER
                                                    @else
                                                        ĐẠI LÝ
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        
                                            <div class="group-info row" style="margin-top:25px;">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                                    @if($daily == NULL)
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daily">Đăng ký trở thành đại lý</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                       
                    </div>
                    <div id="infodaily" class="tab-pane fade in" style="padding:15px;">
                        @if($daily != NULL)
                        <form action="/daily" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$daily->ID_DAILY}}" />
                                <div class="group-info row">
                                    <div class="col-md-3">
                                        <label class="label-control">TÊN ĐẠI LÝ</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input  name="name" class="form-control" type="text" value="{{$daily->TEN_DAILY}}" placeholder="TÊN ĐẠI LÝ"/>
                                    </div>
                                </div>
                                <div class="group-info row">
                                    <div class="col-md-3">
                                        <label class="label-control">SỐ ĐIỆN THOẠI ĐẠI LÝ</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input  name="phone" class="form-control" type="text" value="{{$daily->SDT}}" placeholder="SỐ ĐIỆN THOẠI ĐẠI LÝ"/>
                                    </div>
                                </div>
                                <div class="group-info row">
                                        <div class="col-md-3">
                                            <label class="label-control">EAMIL ĐẠI LÝ</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input  name="phone" class="form-control" type="text" value="{{$daily->EMAIL}}" placeholder="EMAIL ĐẠI LÝ"/>
                                        </div>
                                    </div>
                                <div class="group-info row">
                                    <div class="col-md-3">
                                        <label class="label-control">ĐỊA CHỈ ĐẠI LÝ</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input  name="phone" class="form-control" type="text" value="{{$daily->DIACHI_DAILY}}" placeholder="ĐỊA CHỈ ĐẠI LÝ"/>
                                    </div>
                                </div>
                                <div class="group-info row">
                                    <div class="col-md-3">
                                        <label class="label-control"></label>
                                    </div>
                                    <div class="col-md-9">
                                            <button type="submit" class="btn btn-info">Cập Nhật</button>
                                    </div>
                                </div>
                                
                                
                        </form>
                        @endif
                    </div>
                    <div id="password" class="tab-pane fade in">
                        <form action="password" class="frompasswordprofile" method="POST" style="padding:15px;">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="group-form">
                                <label class="controll-label">Mật khẩu cũ</label>
                                <input name="passold" type="password" class="form-control" required/>
                            </div>
                            <div class="group-form">
                                <label class="controll-label">Mật khẩu mới</label>
                                <input name="passnew" type="password" class="form-control" required/>
                            </div>
                            <div class="group-form">
                                <label class="controll-label">Nhập lại khẩu </label>
                                <input name="passagain" type="password" class="form-control" required/>
                            </div>
                            <br/>
                            <div class="group-form">
                                <button type="submit" class="btn btn-primary">Xác Nhận</button>
                            </div>
                        </form>
                    </div>
                    <div id="studio" class="tab-pane fade">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- modal --}}
<div class="modal" id="daily">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" action="/daily">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">FORM ĐĂNG KÝ ĐẠI LÝ</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                
                <div class="group-info row">
                        <input name="id" type="hidden" class="form-control" value="{{$account->ID_USER}}" />
                        <div class="col-md-4">
                            <label class="label-control">TÊN ĐẠI LÝ</label>
                        </div>
                        <div class="col-md-8">
                            <input name="name" type="text" class="form-control" required />
                        </div>
                    </div>
                    <div class="group-info row">
                            <div class="col-md-4">
                                <label class="label-control">SỐ ĐIỆN THOẠI</label>
                            </div>
                            <div class="col-md-8">
                                <input name="phone" type="text" class="form-control" required />
                            </div>
                    </div>
                    <div class="group-info row" >
                        <div class="col-md-4">
                            <label class="label-control">EMAIL</label>
                        </div>
                        <div class="col-md-8">
                            <input name="email" type="email" class="form-control" required />
                            <small>Lưu ý: đây là email nhận thông tin!</small>
                        </div>
                    </div>
                    <div class="group-info row" >
                        <div class="col-md-4">
                            <label class="label-control">ĐỊA CHỈ</label>
                        </div>
                        <div class="col-md-8">
                            <input name="address" type="text" class="form-control" required />
                            
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
</div>
      
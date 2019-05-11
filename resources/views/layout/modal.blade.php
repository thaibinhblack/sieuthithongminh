<!-- Modal  -->
<div class="modal fade" id="signin">
    <div class="modal-dialog form-block">
        <div class="container">
            <div class="modal-content col-md-12">
                <div class="popup-block">
                    <div class="popup-text-register">
                        <p class="h4">Bạn chưa có tài khoản?</p>
                        <p>Bạn chỉ cần có một tài khoản. Một tài khoản miễn phí giúp bạn truy cập vào nhiều dịch vụ và sản phẩm của chúng tôi.</p>
                        <p class="to-form to-register-thumb">Đăng ký</p>
                    </div>
                    <div class="popup-text-sign-in">
                        <p class="h4">Bạn đã có tài khoản?</p>
                        <p>Bạn có thể đăng nhập tài khoản để sử dụng các dịch vụ và sản phẩm của chúng tôi.</p>
                        <p class="to-form to-signin-thumb">Đăng nhập</p>
                    </div>
                    <div class="form-wrap" id="form-wrap">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                        <form method="POST" action="/login" class="sign-in">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <p class="h4">Đăng nhập</p>
                            <div class="form-info-wrap">
                                <input name="email" type="email" id="in-user" placeholder="Email đăng nhập" required="">
                                <label for="in-user"><i class="fa fa-user" aria-hidden="true"></i></label>
                            </div>
                            <div class="form-info-wrap">
                                <input name="password" type="password" id="in-pass" placeholder="Mật khẩu" required="">
                                <label for="in-pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
                            </div>
                            <button type="submit">Đăng nhập</button>
                            <a href="#" data-toggle="modal" data-target="#forgot" class="back-forgot" >Quên mật khẩu?</a>
                            <p class="to-form to-register-thumb">Bạn chưa có tài khoản? <span> Đăng ký ngay !</span></p>
                        </form>
                    <form action="/resign" method="POST" class="register">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <p class="h4">Đăng ký</p>
                            <div class="form-info-wrap">
                                <input name="username" type="text" id="up-user" placeholder="Họ & Tên" required="">
                                <label for="up-user"><i class="fa fa-user" aria-hidden="true"></i></label>
                            </div>
                            <div class="form-info-wrap">
                                    <input name="address" type="text" id="up-user" placeholder="Địa Chỉ" required="">
                                    <label for="up-user"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></label>
                            </div>
                            <div class="form-info-wrap">
                                    <input name="phone" type="text" id="up-user" placeholder="Số điện thoại" required="">
                                    <label for="up-user"><i class="fa fa-phone"  aria-hidden="true"></i></label>
                            </div>
                            <div class="form-info-wrap">
                                <input name="email" type="email" id="up-email" placeholder="E-mail" required="">
                                <label for="up-email"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                            </div>
                            <div class="form-info-wrap">
                                <input name="password" type="password" id="up-pass" placeholder="Mật khẩu" required="">
                                <label for="up-pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
                            </div>
                            <button type="submit">Đăng ký</button>
                            <p class="to-form to-signin-thumb">Bạn đã có tài khoản? <span> Đăng nhập ngay !</span></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="forgot">
    <div class="modal-dialog form-block">
        <div class="container">
            <div class="modal-content col-md-12">
                <div class="popup-block">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    
                    <form action="#" class="forgot-form">
                        <p class="h4">Quên mật khẩu</p>
                        <p class="h5">
                            Enter your email address and we will send you further instructions on how to reset the password.
                        </p>
                        <input type="email" id="in-emal" placeholder="Email" required="">
                        <button type="submit">Reset password</button>
                        <a href="#" data-toggle="modal" data-target="#signin" class="back-signin">Quay về đăng nhập</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

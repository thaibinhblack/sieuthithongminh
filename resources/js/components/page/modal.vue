<template>
    <div>
        	<!-- Modal  -->
	<div class="modal fade" id="signin">
		<div class="modal-dialog form-block">
			<div class="container">
				<div class="modal-content col-md-12">
					<div class="popup-block">
						<div class="popup-text-register">
							<p class="h4">Bạn chưa có tài khoản?</p>
							<p>Bạn chỉ cần có một tài khoản. Một tài khoản miễn phí giúp bạn truy cập vào nhiều dịch vụ và sản phẩm của chúng tôi.</p>
							<button type="button" class="to-form to-register-thumb" v-on:click="actionlogin">Đăng ký</button>
						</div>
						<div class="popup-text-sign-in">
							<p class="h4">Bạn đã có tài khoản?</p>
							<p>Bạn có thể đăng nhập tài khoản để sử dụng các dịch vụ và sản phẩm của chúng tôi.</p>
							<button type="button" class="to-form to-signin-thumb" v-on:click="actionlogin">Đăng nhập</button>
						</div>
						<div v-bind:class="loginClass" class="form-wrap" id="form-wrap">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          	<span aria-hidden="true">&times;</span>
					        </button>
							<form action="#" class="sign-in">
								<p class="h4">Đăng nhập</p>
								<div class="form-info-wrap">
									<input type="text" id="in-user" placeholder="Tên đăng nhập" required="">
									<label for="in-user"><i class="fa fa-user" aria-hidden="true"></i></label>
								</div>
								<div class="form-info-wrap">
									<input type="text" id="in-pass" placeholder="Mật khẩu" required="">
									<label for="in-pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
								</div>
								<button type="submit">Đăng nhập</button>
								<a href="#" data-toggle="modal" data-target="#forgot" class="back-forgot" >Quên mật khẩu?</a>
								<p class="to-form to-register-thumb">Bạn chưa có tài khoản? <span> Đăng ký ngay !</span></p>
							</form>
							<form action="#" class="register">
								<p class="h4">Đăng ký</p>
								<div class="form-info-wrap">
									<input type="text" id="up-user" placeholder="Tên đăng nhập" required="">
									<label for="up-user"><i class="fa fa-user" aria-hidden="true"></i></label>
								</div>
								<div class="form-info-wrap">
									<input type="text" id="up-email" placeholder="E-mail" required="">
									<label for="up-email"><i class="fa fa-envelope" aria-hidden="true"></i></label>
								</div>
								<div class="form-info-wrap">
									<input type="text" id="up-pass" placeholder="Mật khẩu" required="">
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
    </div>
</template>

<script>

export default {
    data()
    {
        return{

        }
    },
    methods:
    {
        actionlogin(e)
        {
            console.log(e.target.tagName);
        }
    }
}
</script>

<style>
.form-block {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1010;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    max-width: 100%;
}
</style>

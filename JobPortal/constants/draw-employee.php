<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">


<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center">Tạo tài khoản</h4>
</div>

 <div class="modal-body">
<!-- <div class="modal-body-new"> -->
					
<!--asdasdsad -->
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Họ tên</label>
<input class="form-control" placeholder="Điền họ và tên" type="text" name="fname" required="required"> 
</div>
												
</div>

<div class="col-sm-12 col-md-12">

<div class="form-group"> 
    <label>Email</label>
    <input class="form-control" placeholder="Enter your email address" type="text" name="lname" required="required"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
    <label>Tài khoản</label>
    <input class="form-control" placeholder="Enter your username" type="text" name="email" required="required"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
    <label>Mật khẩu</label>
    <input class="form-control" placeholder="Min 8 and Max 20 characters" name="password" required="required" type="password"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
    <label>Xác nhận mật khẩu</label>
    <input class="form-control" placeholder="Re-type password again" name="confirmpassword" required="required" type="password"> 
</div>
												
</div>
										
<input type="hidden" name="acctype" value="101">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary mt-5">Đăng ký</button>
<div class="sign-in_by-register">
        <p> Đồng ý với các điều khoản? 
            <a href="login.php">
                Đăng nhập</a>
        </p>
    </div>	
</div>
								
</div>
</form>
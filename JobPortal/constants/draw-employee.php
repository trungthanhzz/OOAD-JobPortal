<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">


<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="box-register">
							
<div class="modal-header">
<h4 class="modal-title text-center">Create your account for free</h4>
</div>

<!-- <div class="modal-body"> -->
<div class="modal-body-new">
					
<!--asdasdsad -->
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<div class="input-wrapper"> 
<input class="form-control_register" type="text" name="fname" required="required"> 
<span>FullName</span>
<i></i>
</div>
												
</div>

<div class="col-sm-12 col-md-12">

<div class="input-wrapper"> 
    <input class="form-control_register" type="text" name="lname" required="required"> 
    <span>Email</span>
    <i></i>
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="input-wrapper"> 
    <input class="form-control_register" type="text" name="email" required="required"> 
    <span>UserName</span>
    <i></i>
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="input-wrapper"> 
    <input class="form-control_register" name="password" required="required" type="password"> 
    <span>Password</span>
    <i></i>
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="input-wrapper"> 
    <input class="form-control_register" name="confirmpassword" required="required" type="password"> 
    <span>Password Confirmation</span>
    <i></i>
</div>
												
</div>
										
<input type="hidden" name="acctype" value="101">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary mt-5">Register</button>
<div class="sign-in_by-register">
        <p> Already have an account? 
            <a href="login.php">
                Sign in</a>
        </p>
    </div>	
</div>
								
</div>
</form>
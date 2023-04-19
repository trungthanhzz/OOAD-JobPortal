<!doctype html>
<html lang="en">
<?php 
require 'constants/settings.php'; 
require 'constants/check-login.php';

if (isset($_GET['token'])) {
$token = $_GET['token'];	
}else{
	header("location:./");
}

?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Jobs Hunter - Đặt lại mật khẩu</title>
	
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

</head>


<body class="not-transparent-header">

	<div class="container-wrapper">


		<header id="header">


			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><i class="fa-regular fa-house"></i></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="./">Trang chủ</a>
								
							</li>
							
							<li>
								<a href="job-list.php">Danh sách công việc</a>

							</li>
							
							<li>
								<a href="employers.php">Nhà tuyển dụng</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a  href="login.php">Đăng nhập</a></li>
							<li><a data-toggle="modal" href="#registerModal">Đăng ký</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>
	
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Tạo tài khoản</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Đăng ký</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Nhà tuyển dụng</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Đóng</button>
				</div>
				
			</div>



			
		</header>


		<div class="main-wrapper">


			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="./">Trang chủ</a></li>
						<li><span>Đặt lại mật khẩu</span></li>
					</ol>
					
				</div>
				
			</div>


			<div class="login-container-wrapper">	
	
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">
                                <?php
								require 'constants/check_reply.php';	
								?>
                                <form name="frm" action="app/change-pass.php" method="POST" autocomplete="off">
                                <div class="login-box-wrapper">
							
                                <div class="modal-header">
                                <h4 class="modal-title text-center">Đặt lại mật khẩu</h4>
                                </div>

                                <div class="modal-body">
																
                                <div class="row gap-20">
								<?php
								require 'constants/db_config.php';
								
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                $stmt = $conn->prepare("SELECT * FROM tbl_tokens WHERE token = :token limit 1");
								$stmt->bindParam(':token', $token);
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                $res = count($result);
								
								if ($res == "0") {
									                                  print '
	                            <div class="alert alert-warning">
								<strong>Could not use this token because</strong><br>
                                 <li>This token is invalid</li>
								 <li>This token is already used</li>
	                          </div>
                                  ';
								 $invalid_token = true;
								 
								}else{

                                foreach($result as $row)
                                {
									?>
							    <div class="col-sm-12 col-md-12">

                                <div class="form-group"> 
                                <label>New password</label>
                                <input class="form-control" placeholder="Min 8 and Max 20 characters" name="password" required type="password"> 
                                </div>
												
                                 </div>
												
                                <div class="col-sm-12 col-md-12">
												
                                <div class="form-group"> 
                                <label>Xác nhận mật khẩu mới</label>
                                <input class="form-control" placeholder="Min 8 and Max 20 characters" name="confirmpassword" required type="password"> 
                                </div>
												
                                </div>
								<?php
								$_SESSION['resetmail'] = $row['email'];
								?>
								<?php
								
 
	                            }
								}

					  
	                            }catch(PDOException $e)
                                {
           
                                }
	
	
                                ?>
												
</div>

</div>
<?php
if (isset($invalid_token)) {
	
}else{
print '
<div class="modal-footer text-center">
<button type="submit" onclick="return val();"  class="btn btn-primary">Reset my password</button>
</div>';	
}

?>

										
</div>
</form>
									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
								<div class="col-sm-6 col-md-4">
									
									<div class="footer-about-us">
										<h5 class="footer-title">Giới thiệu Jobs Hunter</h5>
										<p>Jobs Hunter là một cổng thông tin việc làm, hệ thống quản lý công việc trực tuyến được phát triển bởi nhóm 8 cho môn học Phân tích thiết kế hướng đối tượng</p>
									
									</div>


								</div>
								
								<div class="col-sm-6 col-md-5 mt-30-xs">
									<h5 class="footer-title">Liên kết nhanh</h5>
									<ul class="footer-menu clearfix">
										<li><a href="../">Trang chủ</a></li>
										<li><a href="../job-list.php">Job List</a></li>
										<li><a href="../employers.php">Nhà tuyển dụng</a></li>
										<li><a href="../employees.php">Nhân viên</a></li>
										<li><a href="../contact.php">Contact Us</a></li>
										<li><a href="#">Lên đầu trang</a></li>

									</ul>
								
								</div>

							</div>

						</div>
						
						<div class="col-sm-12 col-md-3 mt-30-sm">
						
							<h5 class="footer-title">Jobs Hunter Contact</h5>
							
							<p>Address : Công ty THHH KHOA TỊNH</p>
							<p>Email : <a href="hosyvietkhoa37@gmail.com">khoatinh36@gmail.com</a></p>
							<p>Phone : <a href="tel:+233546607474">+233 456 789</a></p>
							

						</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
						
						<div class="col-sm-4 col-md-4">
					
					<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> KhoaTinh Vision Software</p>
					
				</div>
				
				<div class="col-sm-4 col-md-4">
				
					<ul class="bottom-footer-menu">
						<li><a >Developed by Trungthanhzz</a></li>
					</ul>
				
				</div>
							
							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>


	</div> 


<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript">
function val(){
if(frm.password.value == "")
{
	alert("Enter the Password.");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("Password should be minimum 8 characters.");
	frm.password.focus();
	return false;
}

if((frm.password.value).length > 20)
{
	alert("Password should be maximum 20 characters.");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("Enter the Confirmation Password.");
	return false;
}
if(frm.confirmpassword.value != frm.password.value)
{
	alert("Password confirmation does not match.");
	return false;
}

return true;
}
</script>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>

</html>
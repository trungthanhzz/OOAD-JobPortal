<!doctype html>
<html lang="en">
<?php
include 'constants/settings.php';
include 'constants/check-login.php';
?>

<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Jobs Hunter - Đăng nhập</title>

	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords"
		content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
	<meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="500" />
	<meta property="og:image:height" content="300" />
	<meta property="og:image:alt" content="Nightingale Jobs" />
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

	<link rel="stylesheet" href="css/style-login.css">

	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript">
		function update(str) {

			if (document.getElementById('mymail').value == "") {
				alert("Please enter your email");

			} else {
				document.getElementById("data").innerHTML = "Please wait...";
				var xmlhttp;

				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				}
				else {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function () {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("data").innerHTML = xmlhttp.responseText;
					}
				}

				xmlhttp.open("GET", "app/reset-pw.php?opt=" + str, true);
				xmlhttp.send();
			}

		}

		function reset_text() {
			document.getElementById('mymail').value = "";
			document.getElementById("data").innerHTML = "";
		}

	</script>
	<style>
		.box-loginn {
			position: relative;
			width: 380px;
			height: 420px;
			border-radius: 8px;
			overflow: hidden;
			background-color: #fff;
		}


		.loginn-form {
			position: absolute;
			inset: 2px;
			background: #fff;
			border-radius: 4px;
			z-index: 2;
			display: flex;
			flex-direction: column;
		}
	</style>
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">


		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">

					<div class="logo-wrapper">
						<div class="logo">
							<a href="./">
								<img class="max-width-30" src="images/findjobtransnoname.png" alt="logo">
							</a>
						</div>
					</div>

					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">

						<ul class="nav navbar-nav" id="responsive-menu">
							<!-- 						
				<li>
				
					<a href="./">HOME</a>
					
				</li> -->

							<li>
								<a href="job-list.php">TÌM VIỆC</a>

							</li>

							<li>
								<a href="employers.php">CÔNG TY</a>
							</li>


							<li>
								<a href="contact.php">ĐÁNH GIÁ</a>
							</li>

						</ul>

					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in"> <!-- xoa nav-mini -->
							<?php
							if ($user_online == true) {
								print '
				<li><a href="logout.php">Đăng xuất</a></li>
				<li><a href="' . $myrole . '">Trợ giúp</a></li>';
							} else {
								print '
				<li><a href="login.php">Đăng nhập</a></li>
				<li><a data-toggle="modal" href="register.php?p=Employee">Đăng ký</a></li>
				<li><a data-toggle="modal" href="register.php?p=Employer">Nhà tuyển dụng</a></li>';
								// chinh href
							}

							?>

						</ul>
					</div>

				</div>

				<div id="slicknav-mobile"></div>

			</nav>


			<!-- <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title text-center">Create your account for free</h4>
	</div>
	
	<div class="modal-body">
	
		<div class="row gap-20">
		
			<div class="col-sm-6 col-md-6">
				<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Employer</a>
			</div>
			<div class="col-sm-6 col-md-6">
				<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Employee</a>
			</div>

		</div>
	
	</div>
	
	<div class="modal-footer text-center">
		<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
	</div>
	
</div> -->


		</header>


		<div class="main-wrapper">


			<div class="breadcrumb-wrapper">

				<div class="container">

					<ol class="breadcrumb-list">
						<li><a href="./">Trang chủ</a></li>
						<li><span>Truy cập tài khoản</span></li>
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
									include 'constants/check_reply.php';
									?>
									<!-- someshit -->
									<div class="login-wrapper">
										<div class="box-loginn">
											<form class="loginn-form" action="app/auth.php" method="POST"
												autocomplete="off">
												<div class="login-box-wrapper">
													<div class="modal-header">
														<h4 class="modal-title text-center">Đăng nhập</h4>
													</div>
													<div class="modal-body">
														<div class="row gap-20">
															<div class="col-sm-12 col-md-12">
																<div class="form-group">
																	<label>Tài khoản</label>
																	<input class="form-control" type="text"
																		required="required" name="email">
																</div>

															</div>
														</div>
														<div class="row gap-20">
															<div class="col-sm-12 col-md-12">
																<div class="form-group">
																	<label>Mật khẩu</label>
																	<input class="form-control" type="password"
																		required="required" name="password">
																</div>

															</div>
														</div>

													</div>
													<div class="modal-footer text-center">
														<button type="submit" class="btn btn-primary"
															style="color: black !important; font-weight: 600 !important;">Đăng
															nhập</button>
													</div>
												</div>

											</form>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<footer class="footer-wrapper">

			<div class="main-footer">

				<div class="container">

					<div class="col-sm-1 col-md-6">

						<div class="col-sm-12 col-md-15">

							<div class="row">

								<div class="col-sm-8 col-md-8">

									<div class="footer-about-us">
										<h5 class="footer-title">Về chúng tôi</h5>
										<img src="images\findjobtransnoname.png" class="max-width-30" alt="">
										<p></p>

									</div>

								</div>

								<!-- <div class="col-sm-6 col-md-5 mt-30-xs">
									<h5 class="footer-title">Quick Links</h5>
									<ul class="footer-menu clearfix">
										<li><a href="./">Home</a></li>
										<li><a href="job-list.php">Job List</a></li>
										<li><a href="employers.php">Employers</a></li>
										<li><a href="employees.php">Employees</a></li>
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="#">Go to top</a></li>

									</ul>
								
								</div> -->

							</div>

						</div>

						<div class="col-sm-10 col-md-8 mt-30-sm">

							<h5 class="footer-title">Liên hệ</h5>

							<p>Address : 144 Xuan Thuy, Dich Vong Hau, Cau Giay, HN</p>
							<p>Email : <a href="">syhungg0909@gmail.com</a></p>
							<p>Phone : <a href="">+84 398956789</a></p>


						</div>


					</div>

					<div class="col-sm-1 col-md-6">
						<img class="img-map" src="images/UET-address-map.png" alt="">
					</div>

				</div>
				<div class="copyr">
					<p>Copyright by Group 8 2223II_INT3110_2</p>
				</div>
				<div class="social-cov">
					<ul class="bottom-footer-menu for-social margin-auto-lr">
						<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip"
									data-placement="top" title="twitter"></i></a></li>
						<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip"
									data-placement="top" title="facebook"></i></a></li>
						<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip"
									data-placement="top" title="instagram"></i></a></li>
					</ul>
				</div>

			</div>

			<!-- <div class="bottom-footer">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-4 col-md-4">
				
							<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> Nightingale Vision Software</p>
							
						</div>
						
						
						
						<div class="col-sm-10 col-md-8">
							<ul class="bottom-footer-menu for-social">
								<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
								<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
								<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
							</ul>
						</div>
					
					</div>

				</div> -->

	</div>

	</footer>

	</div>


	</div>


	<div id="back-to-top">
		<a href="#"><i class="ion-ios-arrow-up"></i></a>
	</div>

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
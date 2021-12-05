<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Twitter -->
		<meta name="twitter:site" content="@themepixels">
		<meta name="twitter:creator" content="@themepixels">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="DashForge">
		<meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
		<meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
		<!-- Facebook -->
		<meta property="og:url" content="http://themepixels.me/dashforge">
		<meta property="og:title" content="DashForge">
		<meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">
		<meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
		<meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="600">
		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
		<meta name="author" content="ThemePixels">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">
		<title>DashForge Responsive Bootstrap 4 Dashboard Template</title>
		<!-- vendor css -->
		<link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- DashForge CSS -->
		<link rel="stylesheet" href="../../assets/css/dashforge.css">
		<link rel="stylesheet" href="../../assets/css/dashforge.auth.css">
	</head>
	<body>
		<header class="navbar navbar-header navbar-header-fixed">
			<a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
			<div class="navbar-brand">
				<a href="../../index.html" class="df-logo">dash<span>forge</span></a>
			</div>
			<!-- navbar-brand -->
			<div id="navbarMenu" class="navbar-menu-wrapper">
				<div class="navbar-menu-header">
					<a href="../../index.html" class="df-logo">dash<span>forge</span></a>
					<a id="mainMenuClose" href=""><i data-feather="x"></i></a>
				</div>
			</div>
		</header>
		<!-- navbar -->
		<div class="content content-fixed content-auth">
			<div class="container">
				<div class="media align-items-stretch justify-content-center ht-100p">
					<div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
						<div class="pd-t-20 wd-100p">
							<h4 class="tx-color-01 mg-b-5">Регистрация нового аккаунта</h4>
							<p class="tx-color-03 tx-16 mg-b-40">Пройдите регистрацию чтобы продолжить.</p>
                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<label>Имя</label>
									<input type="text" class="form-control" name="name" placeholder="Введите Ваше имя">
								</div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Введите Email">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mg-b-5">
                                        <label class="mg-b-0-f">Пароль</label>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Введите пароль">
                                </div>
                                <div class="form-group">
                                    <label>Подтвердите пароль</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Подтвердите Ваш пароль">
                                </div>
                                <div class="form-group tx-12">
                                    Нажимая <strong>«Создать учетную запись»</strong> ниже, вы соглашаетесь с нашими условиями обслуживания и заявлением о конфиденциальности.
                                </div>
                                <!-- form-group -->
                                <button class="btn btn-brand-02 btn-block" type="submit">Зарегистрироваться</button>
                            </form>
							{{-- <div class="divider-text">or</div>
							<button class="btn btn-outline-facebook btn-block">Sign Up With Facebook</button>
							<button class="btn btn-outline-twitter btn-block">Sign Up With Twitter</button> --}}
							<div class="tx-13 mg-t-20 tx-center">Уже имеете аккаунт? <a href="/login">Войти</a></div>
						</div>
					</div>
					<!-- sign-wrapper -->
					<div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
						<div class="mx-lg-wd-500 mx-xl-wd-550">
							<img src="https://thumbs.dreamstime.com/b/company-registration-business-concept-vector-illustration-man-woman-people-character-work-office-professional-team-near-214953755.jpg" class="img-fluid" alt="">
						</div>
					</div>
					<!-- media-body -->
				</div>
				<!-- media -->
			</div>
			<!-- container -->
		</div>
		<!-- content -->
		<footer class="footer">
			<div>
				<span>&copy; 2019 DashForge v1.0.0. </span>
				<span>Created by <a href="http://themepixels.me">ThemePixels</a></span>
			</div>
			<div>
				<nav class="nav">
					<a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
					<a href="../../change-log.html" class="nav-link">Change Log</a>
					<a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
				</nav>
			</div>
		</footer>
		<script src="../../lib/jquery/jquery.min.js"></script>
		<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../../lib/feather-icons/feather.min.js"></script>
		<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../../assets/js/dashforge.js"></script>
		<!-- append theme customizer -->
		<script src="../../lib/js-cookie/js.cookie.js"></script>
		<script src="../../assets/js/dashforge.settings.js"></script>
		<script>
			$(function(){
			  'use script'
			
			  window.darkMode = function(){
			    $('.btn-white').addClass('btn-dark').removeClass('btn-white');
			  }
			
			  window.lightMode = function() {
			    $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
			  }
			
			  var hasMode = Cookies.get('df-mode');
			  if(hasMode === 'dark') {
			    darkMode();
			  } else {
			    lightMode();
			  }
			});
		</script>
	</body>
</html>
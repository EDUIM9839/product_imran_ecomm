<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 12:28:07 GMT -->
<head>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Dreams POS is a powerful Bootstrap based Inventory Management Admin Template designed for businesses, offering seamless invoicing, project tracking, and estimates.">
		<meta name="keywords" content="inventory management, admin dashboard, bootstrap template, invoicing, estimates, business management, responsive admin, POS system">
		<meta name="author" content="Dreams Technologies">
		<meta name="robots" content="index, follow">
		<title>Dreams POS - Inventory Management & Admin Dashboard Template</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Apple Touch Icon -->
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <!-- Tabler Icon CSS -->
	    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

	    <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
    </head>
    <body class="account-page">

       
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="login-wrapper bg-img">
                    <div class="login-content authent-content">
                        <form method="POST" action="{{ route('login.post') }}">
                              @csrf
                            <div class="login-userset">
                                @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                                <div class="login-logo logo-normal">
                                   <img src="assets/img/logo.svg" alt="img">
                               </div>
                               <a href="index.html" class="login-logo logo-white">
                                   <img src="assets/img/logo-white.svg"  alt="Img">
                               </a>
                               <div class="login-userheading">
                                   <h3>Sign In</h3>
                                   <h4 class="fs-16">Access the Dreamspos panel using your email and passcode.</h4>
                               </div>
                                <div class="mb-3">
                                    <label class="form-label">User ID <span class="text-danger"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" value="" name="user_id" class="form-control border-end-0">
                                        <span class="input-group-text border-start-0">
                                            <i class="ti ti-mail"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password <span class="text-danger"> *</span></label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="pass-input form-control">
                                        <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                    </div>
                                </div>
                               <div class="form-login authentication-check">
                                   <div class="row">
                                       <div class="col-12 d-flex align-items-center justify-content-between">
                                           <div class="custom-control custom-checkbox">
                                               <label class="checkboxs ps-4 mb-0 pb-0 line-height-1 fs-16 text-gray-6">
                                                   <input type="checkbox" class="form-control">
                                                   <span class="checkmarks"></span>Remember me
                                               </label>
                                           </div>
                                           <div class="text-end">
                                               <a class="text-orange fs-16 fw-medium" href="{{ route('forgot-password') }}">Forgot Password?</a>
                                           </div>
                                       </div>                                    
                                   </div>
                               </div>
                               <div class="form-login">
                                   <button type="submit" class="btn btn-primary w-100">Sign In</button>
                               </div>
                               <div class="signinform">
                                   <h4>New on our platform?<a href="{{ route('register') }}" class="hover-a"> Create an account</a></h4>
                               </div>
                               <div class="form-setlogin or-text">
                                   <h4>OR</h4>
                               </div>
                               <div class="mt-2">
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <div class="text-center me-2 flex-fill">
                                            <a href="{{ url('auth/facebook') }}"
                                                class="br-10 p-2 btn btn-info d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="assets/img/icons/facebook-logo.svg" alt="Facebook">
                                            </a>
                                            
                                        </div>
                                        <div class="text-center me-2 flex-fill">
                                            <a href="{{ url('auth/google') }}"
                                                class="btn btn-white br-10 p-2  border d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="assets/img/icons/google-logo.svg" alt="Facebook">
                                            </a>
                                        </div>
                                        <div class="text-center flex-fill">
                                            <a href=""
                                                class="bg-dark br-10 p-2 btn btn-dark d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="assets/img/icons/apple-logo.svg" alt="Apple">
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                               <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright &copy; 2025 DreamsPOS</p>
                            </div>
                           </div>
                        </form>
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		  
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js" type="8a058950b3212a5f8b5e90d5-text/javascript"></script>

         <!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js" type="8a058950b3212a5f8b5e90d5-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js" type="8a058950b3212a5f8b5e90d5-text/javascript"></script>
		
		<!-- Custom JS -->
        <script src="assets/js/script.js" type="8a058950b3212a5f8b5e90d5-text/javascript"></script>

        document.querySelectorAll('.toggle-password').forEach(function(element) {
    element.addEventListener('click', function() {
        let input = this.previousElementSibling;
        if (input.type === 'password') {
            input.type = 'text';
            this.classList.remove('ti-eye-off');
            this.classList.add('ti-eye');
        } else {
            input.type = 'password';
            this.classList.remove('ti-eye');
            this.classList.add('ti-eye-off');
        }
    });
});


    <script src="scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="8a058950b3212a5f8b5e90d5-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"94afa7afe9b13e1c","version":"2025.5.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 12:28:08 GMT -->
</html>
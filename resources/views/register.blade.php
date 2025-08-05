<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 12:29:24 GMT -->
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
				<div class="login-wrapper register-wrap bg-img">
                    <div class="login-content authent-content">
                        <form method="POST" action="{{ url('/register/user') }}">
                              @csrf
                              
                            <div class="login-userset">
                                @if(session('success_user_id') && session('success_password'))
                                    <div class="alert alert-success">
                                        <h4>Registration Successful!</h4>
                                        <p><strong>User ID:</strong> {{ session('success_user_id') }}</p>
                                        <p><strong>Password:</strong> {{ session('success_password') }}</p>
                                    </div>
                                @endif
                                <div class="login-logo logo-normal">
                                   <img src="assets/img/logo.svg" alt="img">
                               </div>
                               <a href="index.html" class="login-logo logo-white">
                                   <img src="assets/img/logo-white.svg"  alt="Img">
                               </a>
                               <div class="login-userheading">
                                   <h3>Register</h3>
                                   <h4>Create New Dreamspos Account</h4>
                               </div>

                                <!-- Sponsor ID -->
                                 <div class="mb-3">
                                    <label>Sponsor ID <span class="text-danger">*</span></label>
                                    <input type="text" name="sponsor_id" id="sponsor_id" class="form-control" required oninput="this.value = this.value.toUpperCase();">
                                    <span id="sponsorStatus" class="text-success d-none">Valid Sponsor!</span>
                                    <span id="sponsorError" class="text-danger d-none">Invalid Sponsor ID!</span>
                                </div>


                              <div id="hiddenFields" style="display:none;">
                                <!-- Position -->
                                <div class="mb-3">
                                    <label class="form-label">Position <span class="text-danger">*</span></label>
                                    <select name="position" class="form-control" required>
                                        <option value="left">Left</option>
                                        <option value="right">Right</option>
                                    </select>
                                </div>

    
                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" value="" name="name" class="form-control border-end-0">
                                        <span class="input-group-text border-start-0">
                                            <i class="ti ti-user"></i>
                                        </span>
                                    </div>
                                </div>
                               <div class="mb-3">
                                    <label class="form-label">Email <span class="text-danger"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" value="" name="email" class="form-control border-end-0">
                                        <span class="input-group-text border-start-0">
                                            <i class="ti ti-mail"></i>
                                        </span>
                                    </div>
                                </div>
                               
                               <!-- Terms & Conditions Checkbox -->
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-primary">Terms & Privacy</a>
                                    </label>
                                </div>
                               <div class="form-login">
                                   <button type="submit" class="btn btn-login">Sign Up</button>
                               </div>
                               </div>
                               <div class="signinform">
                                   <h4>Already have an account ? <a href="{{ route('signin') }}" class="hover-a">Sign In Instead</a></h4>
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
        <script src="assets/js/jquery-3.7.1.min.js" type="c25ea4098206d00aefd58136-text/javascript"></script>

         <!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js" type="c25ea4098206d00aefd58136-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js" type="c25ea4098206d00aefd58136-text/javascript"></script>
		
		<!-- Custom JS -->
        <script src="assets/js/script.js" type="c25ea4098206d00aefd58136-text/javascript"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            let typingTimer;
            const doneTypingInterval = 800; // 0.8 seconds after user stops typing

            $('#sponsor_id').on('keyup', function () {
                clearTimeout(typingTimer);
                const sponsorId = $(this).val();
                if (sponsorId.length >= 3) { // Optional minimum characters
                    typingTimer = setTimeout(() => validateSponsor(sponsorId), doneTypingInterval);
                }
            });

            $('#sponsor_id').on('blur', function () {
                const sponsorId = $(this).val();
                if (sponsorId.length >= 3) {
                    validateSponsor(sponsorId);
                }
            });

            $('#sponsor_id').on('input', function() {
                this.value = this.value.toUpperCase();
            });


            function validateSponsor(sponsorId) {
                $.ajax({
                    url: '{{ url("/validate-sponsor") }}',
                    method: 'POST',
                    data: {
                        sponsor_id: sponsorId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if(response.valid) {
                            $('#hiddenFields').fadeIn();
                            $('#sponsorStatus').removeClass('d-none');
                            $('#sponsorError').addClass('d-none');
                        } else {
                            $('#hiddenFields').fadeOut();
                            $('#sponsorStatus').addClass('d-none');
                            $('#sponsorError').removeClass('d-none');
                        }
                    }
                });
            }
        </script>

    <script src="scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c25ea4098206d00aefd58136-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"94afa8641d988ef1","version":"2025.5.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jun 2025 12:29:24 GMT -->
</html>
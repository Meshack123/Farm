<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/bootstrap-icons/bootstrap-icons.css">
    <link href="./assets/bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/register.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(./images/Agric/unsplash_OpuuB_Io3tQ.jpg); background-size: cover; background-repeat: no-repeat;">
    <!--Login-->
    <div class="container-fluid login-container">
        <div class="register-inner pt-3">
            <img src="./images/fm.png" alt="lagos" class="img-fluid mt-4">

            <p class="text-center fw-bold fs-3 pt-3">Register Your Account</p>

            <p class="text-center lead fw-semibold" style="color:#9FA2B4 ;">Enter your Email Address and Password below</p>
            <div class="form-container">
                <form>
                    <div class="d-lg-flex d-sm-block mb-3">
                        <div class="wider me-lg-3 me-sm-0 mb-lg-0 mb-sm-3">
                            <label class="fw-semibold lead d-sm-none d-lg-block">First Name</label>
                            <input type="text" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="First Name">
                        </div>
    
                        <div class="wider ms-lg-3 ms-sm-0">
                            <label class="fw-semibold lead d-sm-none d-lg-block">Last Name</label>
                            <input type="text" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="d-lg-flex d-sm-block mb-3">
                        <div class="wider me-lg-3 me-sm-0 mb-lg-0 mb-sm-3">
                            <label class="fw-semibold lead d-sm-none d-lg-block">Email Address</label>
                            <input type="email" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="youremail@yahoo.com">
                        </div>
    
                        <div class="wider ms-lg-3 ms-sm-0">
                            <label class="fw-semibold lead d-sm-none d-lg-block">Select Platform</label>
                            <select class="form-select form-select-lg mt-2 fw-normal bg-light" aria-label=".form-select-lg example">
                                <option selected>Select Platform</option>
                                <option value="1">Farmer</option>
                                <option value="2">Buyer</option>
                                <option value="3">Vendor / Agric Retailer</option>
                                <option value="4">Logistics</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-lg-flex d-sm-block mb-3">
                        <div class="wider me-lg-3 me-sm-0 mb-lg-0 mb-sm-3">
                            <label class="fw-semibold lead d-sm-none d-lg-block">Password</label>
                            <input type="password" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Password">
                        </div>
    
                        <div class="wider ms-lg-3 ms-sm-0">
                            <label class="fw-semibold lead d-sm-none d-lg-block">Confirm Password</label>
                            <input type="password" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="form-check align-items-center mb-3">
                        <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label lead fw-semibold" for="flexCheckDefault">
                            I agree to the Terms of <span class="text-success">Services & Privacy Policy</span>
                        </label>
                    </div>

                    <button class="btn btn-success btn-lg fw-semibold btn-input">REGISTER YOUR ACCOUNT</button>

                    

                    
                </form>
            </div>
        </div>
    </div><!--End Login-->
                
    <script src="assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
    <!-- FarmerMart JS File -->
    <script src="./assets/js/main.js"></script>
    
</body>
</html>
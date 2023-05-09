<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./assets/bootstrap-icons/bootstrap-icons.css">
    <link href="./assets/bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(./images/Agric/unsplash_xZEYonpj41o.jpg); background-size: cover; background-repeat: no-repeat;">
    <!--Login-->
    <div class="container-fluid login-container">
        <div class="inner pt-3">
            <img src="./images/fm.png" alt="lagos" class="img-fluid mt-4">

            <h4 class="text-center text-success fw-bold pt-4">FARMERMART</h4>

            <p class="text-center fw-bold fs-3 pt-3">Log In to FarmerMart</p>

            <p class="text-center lead fw-semibold" style="color:#9FA2B4 ;">Enter your Email Address and Password below</p>
            <div class="form-container">
                <form>
                    <div class="mb-4">
                        <label class="fw-semibold lead">Email Address</label>
                        <input type="email" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="youremail@gmail.com">
                    </div>
                    <div class="mb-4">
                        <div class="d-flex">
                            <label class="fw-semibold lead">Password</label>
                            <a href="#" class="fw-semibold ms-auto" style="color:#9FA2B4 ;">Forget Password?</a>
                        </div>
                        <input type="password" class="form-control form-control-lg mt-2 normal bg-light" placeholder="Password">
                    </div>

                    <div class="form-check align-items-center mb-3">
                        <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label lead fw-semibold" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div>

                    <button class="btn btn-success btn-lg fw-semibold btn-input">Log In</button>

                    <div class="text-center mt-4">
                        <p class="fw-semibold lead" style="color:#9FA2B4;">Don't have an account <span class=""><a href="./services.php" class="fw-semibold ms-auto fw-semibold">Sign up</a></span></p>
                    </div>
                </form>
            </div>
        </div>
    </div><!--End Login-->
                
    <script src="assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
    <!-- FarmerMart JS File -->
    <script src="./assets/js/main.js"></script>
    
</body>
</html>
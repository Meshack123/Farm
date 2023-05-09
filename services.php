<?php include 'inc/header.php'; ?>
<body class="shadow-lg">
    <!--nav-->
    <div class="bg-light header">
        <div class="container">
            <div class="d-flex pt-2">
                <p class="navbar-brand fs-5 fw-normal"><i class="fa fa-paper-plane pe-2"></i>youremail@email.com</p>

                <ul class="nav ms-auto ">
                    <li class="nav-item">
                        <a href="#" class="text-success"><i class="bi bi-facebook fs-5 pe-4"></i></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="text-success"><i class="bi bi-instagram fs-5 pe-4"></i></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="text-success"><i class="bi bi-twitter fs-5 pe-4"></i></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="text-success"><i class="bi bi-telegram fs-5"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--End nav-->

    <!--farmermart section-->
    <div class="pt-4 pb-4 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-sm-3">
                    <div class="d-flex align-items-center">
                        <div class="img-box me-4">
                            <a href="#" class="text-success">
                                <img src="images/fm.png" class="img-fluid pt-2 logo">
                            </a>
                        </div>

                        <div class="logo-box">
                            <strong class="farm-name">FARMERMART</strong>
                            <br><span>AGRICULTURE FARMING</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-sm-3">
                    <div class="d-flex mt-3">
                        <div class="border col_2_box me-4">
                            <i class="fa fa-map fs-4 text-success px-3 py-3"></i>
                        </div>

                        <div>
                            <p class="text-success fw-bold first-span">Free Call <span class="text-dark">+1 234 456 78910</span>
                               <br> <span class="fw-light third-span text-black">Call Us Now 24/7 Customer Support</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-sm-3">
                    <div class="d-flex mt-3">
                        <div class="border col_2_box me-4">
                            <i class="fa fa-paper-plane fs-4 text-success px-3 py-3"></i>
                        </div>

                        <div>
                            <p class="text-success fw-bold first-span text-dark">Our Location</span>
                               <br> <span class="fw-light third-span text-black">Call Us Now 24/7 Customer Support</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End farmermart section-->

    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex bg-success rounded">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="fa fa-bars fs-4"></span> Menu
            </button>
            

            <div class="collapse navbar-collapse bg-success mt-lg-0 mt-sm-2" id="navmenu">
                <ul class="navbar-nav mr-auto align-content-center">
                    <li class="nav-item  li-nav fw-bold">
                        <a href="index.php" class="text-success text-light line-box">HOME</a>
                    </li>
                    <li class="nav-item li-nav fw-bold ">
                        <a href="about_us.php" class="text-success text-light">ABOUT US</a>
                    </li>
                    <li class="nav-item li-nav item-active fw-bold ">
                        <a href="services.php" class="text-success text-light">PACKAGES</a>
                    </li>
                    <li class="nav-item li-nav fw-bold">
                        <a href="product.php" class="text-success text-light">PRODUCT</a>
                    </li>

                    <li class="nav-item li-nav fw-bold">
                        <a href="blogs.php" class="text-success text-light">BLOGS</a>
                    </li>

                    <li class="nav-item li-nav fw-bold">
                        <a href="get_help.php" class="text-success text-light">GET HELP</a>
                    </li>
                    <li class="nav-item li-nav fw-bold">
                        <a href="contact.php" class="text-success text-light">CONTACT US</a>
                    </li>
                    <li class="nav-item li-nav active fw-bold align-content-center">
                        <a href="cart.php" class="text-success text-light">CART <span class="badge text-bg-light">4</span></a>
                    </li>
                </ul>
            </div>
            <a href="login.php" class="btn-custom bg-light" data-toggle="modal" data-target="#exampleModalCenter">Account</a>
            <a href="register.php" class="btn-custom bg-light ms-3" data-toggle="modal" data-target="#exampleModalCenter">Get Started</a>
        </div>
            
    </nav><!--End Nav-->

    <!--Section Carousel-->
    <section class="blog-box">
        <div class="about-img" style="background-image:url(images/innerheader.jpg)">
            <h1 class="text-center text-white fw-bold about-text title">SERVICES</h1>
        </div>
    </section><!--End Section Carousel-->
    
    <!--Packages-->
    <section class="user-section">
        <div class="container">
            <div class=" d-flex service-sheild myDiv" id="pills-tab" role="tablist">
                <button class="btn btn-success" type="button" role="presentation">
                   <a class="active text-white fs-4 btn btn-success fw-semibold px-lg-5 px-sm-3 " aria-current="page" href="#" id="pills-client-tab" data-bs-toggle="pill" data-bs-target="#pills-client" aria-controls="pills-client" aria-selected="true">Client</a>
                </button>

                <button class="btn btn-success" type="button" role="presentation">
                    <a class="fs-4 fw-semibold px-lg-5 px-sm-3 btn btn-success  text-white" href="#" id="pills-farmer-tab" data-bs-toggle="pill" data-bs-target="#pills-farmer" aria-controls="pills-farmer" aria-selected="true">Farmer</a>
                </button>

                <button class="btn btn-success" type="button" role="presentation">
                    <a class="text-white btn btn-success fs-4 fw-semibold px-lg-5 px-sm-3 " href="#" id="pills-logistics-tab" data-bs-toggle="pill" data-bs-target="#pills-logistics" aria-controls="pills-logistics" aria-selected="true">Logistics</a>
                </button>

                <button class="btn btn-success" type="button" role="presentation">
                    <a class="text-white btn btn-success fs-4 fw-semibold px-lg-5 px-sm-3 " href="#" id="pills-partner-tab" data-bs-toggle="pill" data-bs-target="#pills-partner" aria-controls="pills-partner" aria-selected="true">Partner</a>
                </button>
                
            </div> 

            <div class="service-option tab-content mt-5" id="myTabContent">
                <div class="tab-pane fade  show active"  data-bs-spy="scroll" id="pills-client" role="tabpanel" aria-labelledby="client-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4 text-success">LITE</p>
                                    <p class="lite-word pb-2">This forum where client can register as a 
                                        normal user also allowing the client purchase within the platform
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                <ul class="pb-4 our_package">
                                    <li><span>&#8226;</span> Client Registration</li><br>
                                    <li><span>&#8226;</span> Account Creation</li><br>
                                    <li><span>&#8226;</span> Product Purchase</li><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4 text-success">PRO</p>
                                    <p class="lite-word pb-2">This is a medium where the client register as a 
                                        Retailer and Distributor of Product created by Farmers and Selling them within the Platform
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                

                                <ul class="pb-4 our_package">
                                    <li><span>&#8226;</span> Client Registration</li><br>
                                    <li><span>&#8226;</span> Account Creation</li><br>
                                    <li><span>&#8226;</span> Product Purchase</li><br>
                                    <li><span>&#8226;</span> Selling of Product</li><br>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4 text-success">PREMIUM</p>
                                    <p class="lite-word pb-2">This user as full priviledge as a Client on the platform
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                
                                <ul class="pb-4 our_package">
                                    <li><span>&#8226;</span> Client Registration</li><br>
                                    <li><span>&#8226;</span> Account Creation</li><br>
                                    <li><span>&#8226;</span> Product Purchase</li><br>
                                    <li><span>&#8226;</span> Subscribtion to Farmers</li><br>
                                    <li><span>&#8226;</span> Selling of Product</li><br>
                                    <li><span>&#8226;</span> Posting and Viewing content <br><span class="ps-3">posted by Farmers</span></li><br>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>


                <!--Second-->
                <div class="tab-pane fade"  data-bs-spy="scroll" id="pills-farmer" role="tabpanel" aria-labelledby="farmer-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4">Lite</p>
                                    <p class="lite-word pb-2">The Farmer can create a minimun of one farm and able to sell limited Product
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                

                                <ul class="our_package pb-4">
                                    <li><span>&#8226;</span> Create a Farm</li><br>
                                    <li><span>&#8226;</span> Upload 10 Product</li><br>
                                    <li><span>&#8226;</span> Able to Purchase From Other <br><span class="ps-3">Vendor</span></li><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4">Pro</p>
                                    <p class="lite-word pb-2">This services allow the Farmer to sell, post his farm product and post blog content 
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                

                                <ul class="our_package pb-4">
                                    <li><span>&#8226;</span> Create Maximum of five Farm</li><br>
                                    <li><span>&#8226;</span> Upload up to 30 Product</li><br>
                                    <li><span>&#8226;</span> Able to Post Blog Content</li><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4">Premium</p>
                                    <p class="lite-word pb-2">This forum has the full unlimited packages for the Farmer
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                

                                <ul class="our_package pb-4 ">
                                    <li><span>&#8226;</span> Unlimited Farm Creation</li><br>
                                    <li><span>&#8226;</span> Unlimited Product Upload on <br><span class="ps-3">Farm</span></li><br>
                                    <li><span>&#8226;</span> Unlimited Blog Content <br><span class="ps-3">Posting and Reviews</span></li><br>
                                    <li><span>&#8226;</span> Farm Review by Partners and<br><span class="ps-3"> Government institution</span></li><br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Second-->

                <!--Third-->
                <div class="tab-pane fade"  data-bs-spy="scroll" id="pills-logistics" role="tabpanel" aria-labelledby="logistics-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4">Lite</p>
                                    <p class="lite-word  pb-3">This forum is where the Logistics is allow to register only one user
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                

                                <ul class="our_package pb-4 ">
                                    <li><span>&#8226;</span> Logistics Registration</li><br>
                                    <li><span>&#8226;</span> Account Creation</li><br>
                                    <li><span>&#8226;</span> Maximum of five Good Delivery</li><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4">Pro</p>
                                    <p class="lite-word pb-2">This Services allow the Logistic to register and create account for maximum of 20 Transporter
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                

                                <ul class="our_package pb-4 ">
                                    <li><span>&#8226;</span> Logistics Registration</li><br>
                                    <li><span>&#8226;</span> Account Creation for only 10 <br><span class="ps-3">Transporter</span></li><br>
                                    <li><span>&#8226;</span> Maximum of 20 Good Delivery</li><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="w-100 service-shadow rounded-5 ">
                                <div>
                                    <p class="premiun-font text-uppercase text-center fw-bold pt-4">Premium</p>
                                    <p class="lite-word pb-2">This forum has the full packages for the Logistics
                                    </p>
                                    </p>
                                </div>

                                <div>
                                    <button class="btn btn-success fw-semibold promo-btn" type="button">Get Started</button>
                                </div>

                                

                                <ul class="our_package pb-4">
                                    <li><span>&#8226;</span> Unlimited Logistics register</li><br>
                                    <li><span>&#8226;</span> Unlimited Transporter Account <br><span class="ps-3">Creation</span></li><br>
                                    <li><span>&#8226;</span> Unlimited numbers of Good <br><span class="ps-3">Delivery</span></li><br>
                                    <li><span>&#8226;</span> delivers "Full Truck Load" and <span class="ps-3">"Less than Truck Load" across <br><span class="ps-3">the entire country</span></span></li><br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Third-->

                <!--Forth-->
                <div class="tab-pane fade"  data-bs-spy="scroll" id="pills-partner" role="tabpanel" aria-labelledby="partner-tab">
                    <div class="py-4">
                        <div class="form-container">
                            <div></div>
                            <p class="fw-semibold lead pb-2">Kindly fill in the appropraite information </p>
                            <form action="" class="appointment-form">
                                <div class="form-group">
                                    <label class="fw-semibold lead pb-2">Full Name</label>
                                    <input type="text" class="form-control input-form" placeholder="Full Name">
                                </div>
                                
                                <div class="form-group">
                                    <label class="fw-semibold lead pb-2">Official Email</label>
                                    <input type="email" class="form-control input-form" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label class="fw-semibold lead pb-2">Official Number</label>
                                    <input type="text" class="form-control input-form" placeholder="Number">
                                </div>


                                <div class="form-group">
                                    <label class="fw-semibold lead pt-3 pb-2">Select Partner</label>
                                    <select class="form-select form-select-lg mt-2 fw-normal bg-light mb-5 input-form" aria-label=".form-select-lg example">
                                        <option selected>Select Partner</option>
                                        <option value="4">Government</option>
                                        <option value="1">Farmer Machinery Vendor</option>
                                        <option value="2">Financial Institution</option>
                                        <option value="3">Research Institution & School</option>
                                        <option value="4">Cooperative</option>
                                        <option value="4">MNO</option>
                                    </select>
                                </div>


                                <div class="">
                                    <button class="btn btn-success btn-lg" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Forth-->
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="footer-box" style="background-color: #141B25;">
        <div class="container  text-white ">
            <div class="foot-inside">
                <div class="row">
                    <div class="col-sm-12 col-md mb-sm-5  mb-lg-0">
                        <div class="footer-opt">
                            <h2 class="pb-lg-3 pb-sm-3 foot-h2 fw-bold text-uppercase">About Us</h2>

                            <p class="fw-semibold foot-p lh-lg">The Farmers’ Mart is that hub <br>that offers multiple services to <br>stakeholders.
                                
                            </p>
                            <button class="btn btn-success btn-lg foot-p" type="button">About Us</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-sm-5  mb-lg-0">
                        <div class="footer-opt">
                            <h2 class="pb-lg-3 pb-sm-3 foot-h2 fw-bold text-uppercase">Explore</h2>
                            <div class="d-flex pe-1 pb-3">
                                <div class="foot-post-img" style="background-image: url(images/farm1.jpg);">

                                </div>
                                <div class>
                                    <h4 class="pt-2 foot-post-h4"><a href="#" class="text-white">Organic Products For Healthy Living</a></h4>
                                    <p class="fw-bold foot-post-h4">Posted:<span class="fw-normal"> 29 September, 2018</span></p>
                                </div>
                            </div>

                            <div class="d-flex pe-1 pb-3">
                                <div class="foot-post-img" style="background-image: url(images/farm1.jpg);">

                                </div>
                                <div>
                                    <h4 class="pt-2 foot-post-h4"><a href="#" class="text-white">Organic Products For Healthy Living</a></h4>
                                    <p class="fw-bold foot-post-h4">Posted:<span class="fw-normal">29 September, 2018</span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4 col-md-2 mb-sm-5 mb-lg-0">
                        <div class="footer-opt">
                            <h2 class="pb-lg-3 pb-sm-3 foot-h2 fw-bold text-uppercase">Explore</h2>
                            <div>
                                <ul class="footer-menu nav">
                                    <li class="fw-semibold pb-2 nav-item"><i class="bi bi-chevron-right pe-2 fw-semibold fs-5"></i><a href="#" class="text-light">About Us</a></li><br>

                                    <li class="fw-semibold pb-2 nav-item"><i class="bi bi-chevron-right pe-2 fw-semibold fs-5"></i><a href="#" class="text-light">Product</a></li><br>

                                    <li class="fw-semibold pb-2 nav-item"><i class="bi bi-chevron-right pe-2 fw-semibold fs-5"></i><a href="#" class="text-light">Blogs</a></li><br>

                                    <li class="fw-semibold pb-2 nav-item"><i class="bi bi-chevron-right pe-2 fw-semibold fs-5"></i><a href="#" class="text-light">Get Help</a></li><br>

                                    <li class="fw-semibold pb-2 nav-item"><i class="bi bi-chevron-right pe-2 fw-semibold fs-5"></i><a href="#" class="text-light">Contact Us</a></li><br>

                                    <li class="fw-semibold pb-2 nav-item"><i class="bi bi-chevron-right pe-2 fw-semibold fs-5"></i><a href="#" class="text-light text-success text-light">Cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="footer-opt">
                            <h2 class="pb-lg-3 pb-sm-3 foot-h2 fw-bold text-uppercase">Locate Us</h2>
                            <div class="">
                            <!-- <ul class="nav">
                                    <li class="nav-item"><i class="icon fa fa-map marker fs-5 pe-4 text-success"></i>  <span class="lead fw-semibold">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                    <li class="nav-item"><a href="#"><i class="icon fa fa-phone"></i><span>+44 9045678</span> </li>
                                    <li class="nav-item"><a href="#"><i class="icon fa fa-paper-plane pr-4"></i></a>info@someone.com</li>
                                </ul>-->
                                <div class="d-flex mb-3">
                                    <i class="icon fa fa-map marker fs-5 pe-4 pt-1 text-success"></i>
                                    <span class="lead-span fw-semibold">203 Fake St. Mountain View, San Francisco, California, USA</span>
                                </div>

                                <div class="d-flex mb-3">
                                    <i class="icon fa  fa-phone fs-5 pe-4 pt-1 text-success"></i>
                                    <span class="lead-span fw-semibold">+44 9045678</span>
                                </div>

                                <div class="d-flex">
                                    <i class="icon fa  fa-paper-plane fs-5 pe-4 pt-1 text-success"></i>
                                    <span class="lead-span fw-semibold">info@someone.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php'; ?>
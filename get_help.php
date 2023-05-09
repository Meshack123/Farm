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
                    <li class="nav-item li-nav fw-bold ">
                        <a href="services.php" class="text-success text-light">PACKAGES</a>
                    </li>
                    <li class="nav-item li-nav fw-bold">
                        <a href="product.php" class="text-success text-light">PRODUCT</a>
                    </li>

                    <li class="nav-item li-nav fw-bold">
                        <a href="blogs.php" class="text-success text-light">BLOGS</a>
                    </li>

                    <li class="nav-item item-active li-nav fw-bold">
                        <a href="get_help.php" class="text-success text-light">GET HELP</a>
                    </li>
                    <li class="nav-item li-nav fw-bold">
                        <a href="contact.php" class="text-success text-light">CONTACT US</a>
                    </li>
                    <li class="nav-item li-nav fw-bold align-content-center">
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
            <h1 class="text-center text-white fw-bold about-text title">Get Help</h1>
        </div>
    </section><!--End Section Carousel-->
    
    <!--Information $ Question-->
    <section class="faq-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-size">
                    <div>
                        <h1 class="mb-5 fw-bold">REQUEST AN ESTIMATE</h1>
                        <form action="" class="appointment-form">
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control input-form" id="" placeholder="First Name">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-form" placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-form" placeholder="Phone">
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon">
                                                <span class="bi bi-chevron-down"></span>
                                            </div>
                                            <select name id class="form-control input-form">
                                                <option value="">Select Your Services</option>
                                                <option value="">Organic Solution</option>
                                                <option value="">Organic Solution</option>
                                                <option value="">Harvest Innovation</option>
                                                <option value="">Agriculture Farming</option>
                                                <option value="">Other Services</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="4" class="form-control input-form" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Request A Quote" class="btn btn-success py-3 px-4">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div>
                        <h1 class="mb-5 fw-bold">FREQUENTLY ASK QUESTION</h1>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button fs-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                  How To Manage Your Farm?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                  <ol>
                                    <li class="fs-4 fw-semibold"> <p class="ps-2">Far far away, behind the word mountains</p></li>
                                    <li class="fs-4 fw-semibold"><p class="ps-2">Consonantia, there live the blind texts</p></li>
                                    <li class="fs-4 fw-semibold"><P class="ps-2">When she reached the first hills of the Italic Mountains</P></li>
                                    <li class="fs-4 fw-semibold"><p class="ps-2">Bookmarksgrove, the headline of Alphabet Village</p></li>
                                    <li class="fs-4 fw-semibold"><p class="ps-2">Separated they live in Bookmarksgrove right</p></li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed fs-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                  How To Ripe Fruit in a Better Way?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <ol>
                                        <li class="fs-4 fw-semibold"> <p class="ps-2">Far far away, behind the word mountains</p></li>
                                        <li class="fs-4 fw-semibold"><p class="ps-2">Consonantia, there live the blind texts</p></li>
                                        <li class="fs-4 fw-semibold"><P class="ps-2">When she reached the first hills of the Italic Mountains</P></li>
                                        <li class="fs-4 fw-semibold"><p class="ps-2">Bookmarksgrove, the headline of Alphabet Village</p></li>
                                        <li class="fs-4 fw-semibold"><p class="ps-2">Separated they live in Bookmarksgrove right</p></li>
                                    </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed fs-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                  How To Cultivate Soil?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <ol class="pt-4">
                                        <li class="fs-4 fw-semibold"> <p class="ps-2">Far far away, behind the word mountains</p></li>
                                        <li class="fs-4 fw-semibold"><p class="ps-2">Consonantia, there live the blind texts</p></li>
                                        <li class="fs-4 fw-semibold"><P class="ps-2">When she reached the first hills of the Italic Mountains</P></li>
                                        <li class="fs-4 fw-semibold"><p class="ps-2">Bookmarksgrove, the headline of Alphabet Village</p></li>
                                        <li class="fs-4 fw-semibold"><p class="ps-2">Separated they live in Bookmarksgrove right</p></li>
                                      </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                  <button class="accordion-button collapsed fs-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    What Are Does Requirement For Businesses?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                  <div class="accordion-body">
                                      <ol class="pt-4">
                                          <li class="fs-4 fw-semibold"> <p class="ps-2">Far far away, behind the word mountains</p></li>
                                          <li class="fs-4 fw-semibold"><p class="ps-2">Consonantia, there live the blind texts</p></li>
                                          <li class="fs-4 fw-semibold"><P class="ps-2">When she reached the first hills of the Italic Mountains</P></li>
                                          <li class="fs-4 fw-semibold"><p class="ps-2">Bookmarksgrove, the headline of Alphabet Village</p></li>
                                          <li class="fs-4 fw-semibold"><p class="ps-2">Separated they live in Bookmarksgrove right</p></li>
                                        </ol>
                                  </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Information $ Question-->

    <!--Newletter-->
    <section class="newsletter-box img" style="background-image: url(images/green-wheat-farm-india_96696-916.jpg); background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                    <h2 class="text-dark fw-bold">Subscribe to our Newsletter</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="#" class="newsletter-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!--End Newletter-->


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
<?php include 'inc/header.php'; ?>
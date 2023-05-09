<?php include 'inc/header.php'; ?>
<body>
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
                            <a href="index.php" class="text-success">
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
                    <li class="nav-item item-active li-nav fw-bold">
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
    <section class="product-box">
        <div class="about-img" style="background-image:url(images/farm_products.jpg)">
            <h1 class="text-center text-white fw-bold about-text">PRODUCTS</h1>
        </div>
    </section><!--End Section Carousel-->

    <!--Search Box-->
    <div class="prod-search-box">
        <div class="container">
            <div class="d-flex bg-white rounded-3 inner-box shadow-lg">
                <input class="form-control form-control-lg farm-form" type="text" placeholder="Find your Choice" aria-label=".form-control-lg example">

                <select class="form-select form-select-lg category-form" aria-label=".form-select-lg example">
                    <option selected>Category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <button type="button" class="btn btn-success search-icon fs-4 d-lg-block d-sm-none">
                    <i class="bi bi-search pe-2"></i> Search
                  </button>

                  <button type="button" class="btn btn-success search-icon fs-4 d-lg-none d-sm-block">
                    <i class="bi bi-search pe-2"></i>
                  </button>
            </div>
        </div>
    </div><!--End Search Box-->

    <!--Product-->
    <div class="prod-box">
        <div class="container">
            <div class="row">
                <!--first Product-->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="entirely-box">
                    <div class="cont-product">
                            <div class="product-img rounded-2" style="background-image:url(images/broilers-feeding-indoors.jpg)">
                                <div class="middle">
                                    <!--<div class="product_text fw-semibold fs-4">Add to Cart</div>-->
                                    <a class="product_text fw-semibold btn  btn-lg btn-success" href="product.php" role="button">View Product</a>
                                  </div>
                            </div>
                        </div>
                        <div class="product-describe-box rounded-2">
                            <div class="d-flex">
                                <h3 class="pt-3" id="their-text">Boiler</h3>
                                <p class="ms-auto locate"><i class="bi bi-geo-alt"></i> Cross River</p>
                            </div>
                            <hr class="line">

                           <div class="d-flex">
                                <div class="">
                                    <span class="fw-semibold" id="sale">For Sale</span>
                                    <p class="fw-bold text-success product-p">&#8358 <span>3000</span></p>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-light pull-it" href="product_details.php" role="button">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End first Product-->

                <!--Second Product-->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="entirely-box">
                    <div class="cont-product">
                            <div class="product-img rounded-2" style="background-image:url(images/broilers-feeding-indoors.jpg)">
                                <div class="middle">
                                    <!--<div class="product_text fw-semibold fs-4">Add to Cart</div>-->
                                    <a class="product_text fw-semibold btn  btn-lg btn-success" href="product.php" role="button">View Product</a>
                                  </div>
                            </div>
                        </div>
                        <div class="product-describe-box rounded-2">
                            <div class="d-flex">
                                <h3 class="pt-3" id="their-text">Boiler</h3>
                                <p class="ms-auto locate"><i class="bi bi-geo-alt"></i> Cross River</p>
                            </div>
                            <hr class="line">

                           <div class="d-flex">
                                <div class="">
                                    <span class="fw-semibold" id="sale">For Sale</span>
                                    <p class="fw-bold text-success product-p">&#8358 <span>3000</span></p>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-light pull-it" href="product_details.php" role="button">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Second Product-->

                <!--Third Product-->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="entirely-box">
                    <div class="cont-product">
                            <div class="product-img rounded-2" style="background-image:url(images/broilers-feeding-indoors.jpg)">
                                <div class="middle">
                                    <!--<div class="product_text fw-semibold fs-4">Add to Cart</div>-->
                                    <a class="product_text fw-semibold btn  btn-lg btn-success" href="product.php" role="button">View Product</a>
                                  </div>
                            </div>
                        </div>
                        <div class="product-describe-box rounded-2">
                            <div class="d-flex">
                                <h3 class="pt-3" id="their-text">Boiler</h3>
                                <p class="ms-auto locate"><i class="bi bi-geo-alt"></i> Cross River</p>
                            </div>
                            <hr class="line">

                           <div class="d-flex">
                                <div class="">
                                    <span class="fw-semibold" id="sale">For Sale</span>
                                    <p class="fw-bold text-success product-p">&#8358 <span>3000</span></p>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-light pull-it" href="product_details.php" role="button">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Third Product-->

                <!--Fourth Product-->
                <div class="col-lg-4 col-md-6 mb-sm-5">
                    <div class="entirely-box">
                    <div class="cont-product">
                            <div class="product-img rounded-2" style="background-image:url(images/broilers-feeding-indoors.jpg)">
                                <div class="middle">
                                    <!--<div class="product_text fw-semibold fs-4">Add to Cart</div>-->
                                    <a class="product_text fw-semibold btn  btn-lg btn-success" href="product.php" role="button">View Product</a>
                                  </div>
                            </div>
                        </div>
                        <div class="product-describe-box rounded-2">
                            <div class="d-flex">
                                <h3 class="pt-3" id="their-text">Boiler</h3>
                                <p class="ms-auto locate"><i class="bi bi-geo-alt"></i> Cross River</p>
                            </div>
                            <hr class="line">

                           <div class="d-flex">
                                <div class="">
                                    <span class="fw-semibold" id="sale">For Sale</span>
                                    <p class="fw-bold text-success product-p">&#8358 <span>3000</span></p>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-light pull-it" href="product_details.php" role="button">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Fourth Product-->

                <!--Fifth Product-->
                <div class="col-lg-4 col-md-6 mb-sm-5">
                    <div class="entirely-box">
                    <div class="cont-product">
                            <div class="product-img rounded-2" style="background-image:url(images/broilers-feeding-indoors.jpg)">
                                <div class="middle">
                                    <!--<div class="product_text fw-semibold fs-4">Add to Cart</div>-->
                                    <a class="product_text fw-semibold btn  btn-lg btn-success" href="product.php" role="button">View Product</a>
                                  </div>
                            </div>
                        </div>
                        <div class="product-describe-box rounded-2">
                            <div class="d-flex">
                                <h3 class="pt-3" id="their-text">Boiler</h3>
                                <p class="ms-auto locate"><i class="bi bi-geo-alt"></i> Cross River</p>
                            </div>
                            <hr class="line">

                           <div class="d-flex">
                                <div class="">
                                    <span class="fw-semibold" id="sale">For Sale</span>
                                    <p class="fw-bold text-success product-p">&#8358 <span>3000</span></p>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-light pull-it" href="product_details.php" role="button">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Fifth Product-->

                <!--Sixth Product-->
                <div class="col-lg-4 col-md-6 ">
                    <div class="entirely-box">
                        <div class="cont-product">
                            <div class="product-img rounded-2" style="background-image:url(images/broilers-feeding-indoors.jpg)">
                                <div class="middle">
                                    <!--<div class="product_text fw-semibold fs-4">Add to Cart</div>-->
                                    <a class="product_text fw-semibold btn  btn-lg btn-success" href="product.php" role="button">View Product</a>
                                  </div>
                            </div>
                        </div>
                        <div class="product-describe-box rounded-2">
                            <div class="d-flex">
                                <h3 class="pt-3" id="their-text">Boiler</h3>
                                <p class="ms-auto locate"><i class="bi bi-geo-alt"></i> Cross River</p>
                            </div>
                            <hr class="line">

                           <div class="d-flex">
                                <div class="">
                                    <span class="fw-semibold" id="sale">For Sale</span>
                                    <p class="fw-bold text-success product-p">&#8358 <span>3000</span></p>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-light pull-it" href="product_details.php" role="button">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Fifth Product-->
            </div>
            <nav aria-label="Page navigation example" class="mt-5">
                <ul class="pagination prod-pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true" class="">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item "><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link point" href="#" >2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
            </nav>
        </div>
    </div><!--Product-->

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
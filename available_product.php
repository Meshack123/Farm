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
    <section class="blog-box">
        <div class="about-img" style="background-image:url(images/farm_products.jpg)">
            <h1 class="text-center text-white fw-bold about-text">Available Farm Details</h1>
        </div>
    </section><!--End Section Carousel-->


    <!--Product-->
    <div class="mb-5">
        <div class="container">
            <div class="row">
                <!--first Product-->
                <div class="col-md-6 mb-5">
                    <div class="rounded-4 detail-container">
                        <div id="carouselExampleIndicators" class="carousel slide rounded-4 " data-bs-ride="true">
                            <div class="carousel-indicators indictor">
                                <div data-bs-target="#carouselExampleIndicators" id="carou-box-img" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-image: url(images/corn.jpg); background-size: cover;"></div>
                                <div id="carou-box-img" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="background-image: url(images/DT-maize-04.jpg); background-size: cover;"></div>
                                <div id="carou-box-img" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="background-image: url(images/corn.jpg); background-size: cover;"></div>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active rounded-4">
                                <img src="images/corn.jpg" class="d-block w-100 rounded-4" alt="...">
                              </div>
                              <div class="carousel-item rounded-4">
                                <img src="images/DT-maize-04.jpg" class="d-block w-100 rounded-4" alt="...">
                              </div>
                              <div class="carousel-item rounded-4">
                                <img src="images/corn.jpg" class="d-block w-100 rounded-4" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 mb-5">
                    <div class="details-text">
                        <h1 class="details-h1">Maize</h1>
                        <div class="my-4">
                            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                <span><i class="bi bi-star-fill star-rated"></i></span>
                              </button>
                              <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                <span><i class="bi bi-star-fill star-rated"></i></span>
                              </button>
                              <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                <span><i class="bi bi-star-fill star-rated"></i></span>
                              </button>
                              <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                <span><i class="bi bi-star-fill star-unrated"></i></span>
                              </button>
                              <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                <span><i class="bi bi-star-fill star-unrated"></i></span>
                              </button>
                        </div>

                        <p class="lead fw-semibold">Corn is a tall annual cereal grass (Zea mays) that is 
                            widely grown for its large elongated ears of starchy seeds. 
                            The seeds, which are also known as corn, are used as food for humans 
                            and livestock and as a source of biofuel and can be processed into a 
                            wide range of useful chemicals.
                        </p>

                        <span class="fs-1 fw-bold text-dark">&#8358 <span>2000</span></span>

                        <p class="text-danger fs-4 fw-semibold align-items-center"><i class="bi bi-exclamation-circle"></i> <span>50</span> units left</p>

                        <p class="lead fw-semibold">Quantity: <span class="fs-4 fw-bold text-danger">200</span></p>

                        <div>
                            <button class="btn btn-success btn-lg fw-semibold" type="button">Add to Cart</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!--Product-->


    <!--<div class="product-Condition">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-semibold fs-4">Product Details</span>
                        </div>
                        <div class="card-body">
                            <p class="lead fw-semibold">Corn is a tall annual cereal grass (Zea mays) that is 
                                widely grown for its large elongated ears of starchy seeds. 
                                The seeds, which are also known as corn, are used as food for humans 
                                and livestock and as a source of biofuel and can be processed into a 
                                wide range of useful chemicals.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-semibold fs-4">Specification</span>
                        </div>
                        <div class="card-body">
                           <ul class="nav lead">
                            <li class="nav-item fw-semibold pb-2"><span class="fw-bold">Farm Name:</span> Eleko Farm</li><br>
                            <li class="nav-item fw-semibold pb-2"><span class="fw-bold">Product Weight:</span> 16.5 gm</li><br>
                            <li class="nav-item fw-semibold pb-2"><span class="fw-bold">Farm Location:</span> Ilorin</li><br>
                            <li class="nav-item fw-semibold pb-2"><span class="fw-bold">Farm Dimension:</span> 10 Acres of land</li><br>
                            <li class="nav-item fw-semibold"><span class="fw-bold">Availability:</span> Yes</li>
                           </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-semibold fs-4">WHAT’S TO BE DELIVER</span>
                        </div>
                        <div class="card-body">
                           <ul class="nav fs-4">
                            <li class="nav-item fw-semibold "> Maize</li><br>
                           </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex">
                            <span class="fw-semibold fs-4 pt-3 ps-5">Verified Customer Feedback</span>
                            <a href="#" class="lead fw-semibold ms-auto pt-3 pe-5">SELL ALL</a>
                        </div>
                        <hr>
                        <p class="lead fw-semibold pt-3 ps-5">COMMENTS FROM VERIFIED PURCHASES(92)</p>
                        
                        <div class="user-comment">
                            <div class="d-flex ps-5">
                                <div class="user-img-box " style="background-image: url(images/messages-1.jpg); background-size: cover; background-repeat: no-repeat;">

                                </div>
                                <div>
                                    <span class="fs-3 fw-semibold">Adenuga Salamot</span><br>
                                    <p></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="product-Condition">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-semibold fs-4"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    PRODUCT DETAILS
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="lead fw-semibold">Corn is a tall annual cereal grass (Zea mays) that is 
                                        widely grown for its large elongated ears of starchy seeds. 
                                        The seeds, which are also known as corn, are used as food for humans 
                                        and livestock and as a source of biofuel and can be processed into a 
                                        wide range of useful chemicals.
                                    </p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-semibold fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    SPECIFICATION
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table lead">
                                        <tbody>
                                            <tr>
                                                <th>Product Weight</th>
                                                <td>16.5 gm</td>
                                            </tr>
                                            <tr>
                                                <th>Farm Name</th>
                                                <td>Eleko Farm</td>
                                            </tr>
                                            <tr>
                                                <th>Farm Location</th>
                                                <td>Ilorin</td>
                                            </tr>
                                            <tr>
                                                <th>Farm Dimension</th>
                                                <td>10 Acres of land</td>
                                            </tr>
                                            <tr>
                                                <th>Product Condition</th>
                                                <td>Available</td>
                                            </tr>
                                        </tbody>
                                      </table>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-semibold fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    WHAT’S TO BE DELIVER
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="lead fw-semibold">Maize</p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="d-flex">
                            <span class="fw-semibold fs-4 pt-3 ps-5">Verified Customer Feedback</span>
                            <a href="#" class="lead fw-semibold ms-auto pt-3 pe-5 text-success">SEE ALL</a>
                        </div>
                        <hr>
                        <p class="lead fw-semibold py-1 ps-5">COMMENTS FROM VERIFIED PURCHASES(92)</p>
                        
                        <div class="user-comment">
                            <div class="d-flex ps-5 align-items-center">
                                <div class="user-img-box me-3" style="background-image: url(images/messages-1.jpg); background-size: cover; background-repeat: no-repeat;">

                                </div>
                                <div>
                                    <strong class="product-user">Adenuga Salamot</strong><br>
                                    <span class="fw-semibold fs-5">The product was in good condition</span>
                                    <p class="pt-2">31-01-2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex ps-5 align-items-center mb-3">
                                <div class="user-img-box me-3" style="background-image: url(images/messages-3.jpg); background-size: cover; background-repeat: no-repeat;">

                                </div>
                                <div>
                                    <strong class="product-user">Adenuga Gabriel</strong><br>
                                    <span class="fw-semibold fs-5">The product is very bad</span>
                                    <p class="pt-2">31-01-2023</p>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

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

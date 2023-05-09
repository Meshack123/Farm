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
            <h1 class="text-center text-white fw-bold about-text title">ACCOUNT</h1>
        </div>
    </section><!--End Section Carousel-->
    
    <!--user-->
    <section class="user-section">
        <div class="container">
            <div class="">
                <div class="d-flex">
                    <!--left session-->
                    <div class="left-session border me-3"  id="pills-tab" role="tablist">
                        <div class="d-flex box-hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex " role="presentation">
                                <i class="bi bi-speedometer2 fs-4 gear pe-3 d-sm-none d-lg-block"></i>
                                <p class="pt-3 lead fw-semibold text-dark active the-word d-sm-none d-lg-block" id="pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#pills-dashboard" aria-controls="pills-dashboard" aria-selected="true">Dashboard</p>
                                <i class="bi bi-speedometer2 fs-4 gear d-sm-block d-lg-none" id="pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#pills-dashboard" aria-controls="pills-dashboard" aria-selected="true"></i>
                            </div>
                        </div>

                        <!--available farm-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="bi bi-basket2-fill fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 lead fw-semibold the-word d-sm-none d-lg-block" id="pills-available-tab" data-bs-toggle="pill" data-bs-target="#pills-available" aria-controls="pills-available" aria-selected="true">Available Farm</p>
                                <i class="bi bi-basket2-fill fs-4 gear d-sm-block d-lg-none pe-3" id="pills-available-tab" data-bs-toggle="pill" data-bs-target="#pills-available" aria-controls="pills-available" aria-selected="true"></i>
                            </div>
                        </div><!--End available farm-->

                        <!--second-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="bi bi-compass fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 lead fw-semibold the-word d-sm-none d-lg-block" id="pills-tracker-tab" data-bs-toggle="pill" data-bs-target="#pills-tracker" aria-controls="pills-tracker" aria-selected="true">Tracker</p>
                                <i class="bi bi-compass fs-4 gear d-sm-block d-lg-none pe-3" id="pills-tracker-tab" data-bs-toggle="pill" data-bs-target="#pills-tracker" aria-controls="pills-tracker" aria-selected="true"></i>
                            </div>
                        </div><!--End second-->

                        <!--third-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="bi bi-cart-check-fill fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 lead fw-semibold the-word d-sm-none d-lg-block" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" aria-controls="pills-order" aria-selected="true">Order</p>
                                <i class="bi bi-cart-check-fill fs-4 gear d-sm-block d-lg-none pe-3" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" aria-controls="pills-order" aria-selected="true"></i>
                            </div>
                        </div><!--End third-->

                        <!--fourth-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="bi bi-receipt fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 lead fw-semibold the-word d-sm-none d-lg-block" id="pills-report-tab" data-bs-toggle="pill" data-bs-target="#pills-report" aria-controls="pills-report" aria-selected="true">Report</p>
                                <i class="bi bi-receipt fs-4 gear d-sm-block d-lg-none pe-3"  id="pills-report-tab" data-bs-toggle="pill" data-bs-target="#pills-report" aria-controls="pills-report" aria-selected="true"></i>
                            </div>
                        </div><!--End fourth-->

                        <!--fourth-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="bi bi-gear fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 lead fw-semibold the-word d-sm-none d-lg-block" id="pills-setting-tab" data-bs-toggle="pill" data-bs-target="#pills-setting" aria-controls="pills-setting" aria-selected="true">Setting</p>
                                <i class="bi bi-gear fs-4 gear d-sm-block d-lg-none pe-3" id="pills-setting-tab" data-bs-toggle="pill" data-bs-target="#pills-setting" aria-controls="pills-setting" aria-selected="true"></i>
                            </div>
                        </div><!--End fourth-->

                        <!--Upgrade-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="bi bi-arrow-up-circle-fill fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 lead fw-semibold the-word d-sm-none d-lg-block" id="pills-upgrade-tab" data-bs-toggle="pill" data-bs-target="#pills-upgrade" aria-controls="pills-upgrade" aria-selected="true">Upgrade</p>
                                <i class="bi bi-arrow-up-circle-fill fs-4 gear d-sm-block d-lg-none pe-3" id="pills-upgrade-tab" data-bs-toggle="pill" data-bs-target="#pills-upgrade" aria-controls="pills-upgrade" aria-selected="true"></i>
                            </div>
                        </div><!--End Upgrade-->

                        <!--fifth-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="fa fa-window-restore fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 lead fw-semibold the-word d-sm-none d-lg-block" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" aria-controls="pills-password" aria-selected="true">Password Reset</p>
                                <i class="fa fa-window-restore fs-4 gear d-sm-block d-lg-none pe-3" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" aria-controls="pills-password" aria-selected="true"></i>
                            </div>
                        </div><!--End fifth-->

                        <!--fifth-->
                        <div class="d-flex mess_hover">
                            <div class="ms-lg-3  ms-sm-2 d-flex" role="presentation">
                                <i class="bi bi-box-arrow-in-left fs-4 gear d-sm-none d-lg-block pe-3"></i>
                                <p class="pt-3 the-word d-sm-none d-lg-block" ><a href="login.php" class="lead fw-semibold text-dark">Logout</a></p>
                                <p class="pt-3 the-word d-sm-b lock d-lg-none"><a href="login.php" class="lead fw-semibold text-dark"><i class="bi bi-box-arrow-in-left fs-4 gear"></i></a></p>
                            </div>
                        </div><!--End fifth-->
                        
                    </div><!--End left session-->
    
                    <!--right session-->
                    <div class="right-session border tab-content"  id="myTabContent">
                        <!--dashboard-->
                        <div class="tab-pane fade  show active" data-bs-spy="scroll" id="pills-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <h2 class="fw-semibold py-4 ps-5">Welcome <span class="text-success fw-bold">Abubakar Ahmed</span> !!!</h2>
                        </div><!--End dashboard-->

                        <!--Available-->
                        <div class="tab-pane fade" data-bs-spy="scroll" id="pills-available" role="tabpanel" aria-labelledby="available-tab">
                            <h2 class="fw-semibold py-3 ps-5">Available Farm</h2>
                            <hr>
                            <!--available product informataion-->
                            <div class="d-flex text-center text-success">
                                <div class="w-100">
                                    <p class="fs-5 fw-bold">Farm Name</p>
                                </div>
                                <div class="w-100">
                                    <p class="fs-5 fw-bold">Farmer Name</p>
                                </div>
                                <div class="w-100">
                                    <p class="fs-5 fw-bold">Farm Location</p>
                                </div>
                                <div class="w-100">
                                    <p class="fs-5 fw-bold">Farm Item</p>
                                </div>
                                <div class="w-100">
                                    <p class="fs-5 fw-bold">Action</p>
                                </div>
                            </div><!-- End available product informataion-->
                            
                            <!--Copy 1-->
                            <div class="d-flex text-center border box-hover">
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Eleko Farm</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Agbeloba</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Ibadan</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Cassava</p>
                                </div>
                                <div class="w-100 d-sm-none d-lg-block">
                                    <button class="btn btn-success btn-lg mt-2" type="button"><a href="available_product.php" class="lead fw-semibold text-white">View</a></button> 
                                </div>
                                <div class="w-100 d-sm-block d-lg-none">
                                    <button class="btn btn-success mt-2" type="button"><a href="available_product.php" class="lead fw-semibold text-white">View</a></button> 
                                </div>
                            </div><!--End Copy 1-->

                            <!--Copy 2-->
                            <div class="d-flex text-center border box-hover">
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Pedro Farm</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Taiye</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Kwara</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Plantain</p>
                                </div>
                                <div class="w-100 d-sm-none d-lg-block">
                                    <button class="btn btn-success btn-lg mt-2" type="button"><a href="available_product.php" class="lead fw-semibold text-white">View</a></button> 
                                 </div>
                                 <div class="w-100 d-sm-block d-lg-none">
                                     <button class="btn btn-success mt-2" type="button"><a href="available_product.php" class="lead fw-semibold text-white">View</a></button> 
                                  </div>
                            </div><!--End Copy 2-->

                            <!--Copy 3-->
                            <div class="d-flex text-center border box-hover">
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Oyun Farm</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Aminu</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Ilorin</p>
                                </div>
                                <div class="w-100">
                                    <p class="lead fw-semibold pt-3">Cashue</p>
                                </div>
                                <div class="w-100 d-sm-none d-lg-block">
                                   <button class="btn btn-success btn-lg mt-2" type="button"><a href="available_product.php" class="lead fw-semibold text-white">View</a></button> 
                                </div>
                                <div class="w-100 d-sm-block d-lg-none">
                                    <button class="btn btn-success mt-2" type="button"><a href="available_product.php" class="lead fw-semibold text-white">View</a></button> 
                                 </div>
                            </div><!--End Copy 3-->
                            
                        </div><!--End Available-->

                        <!--Tracker-->
                        <div class="tab-pane fade" data-bs-spy="scroll" id="pills-tracker" role="tabpanel" aria-labelledby="tracker-tab">
                            <h2 class="fw-semibold py-3 ps-lg-5 ps-sm-5">Tracker</h2>
                            <hr class="adjust-top">

                            <div class="track-option align-items-center">
                                <div class="chk-all d-lg-flex d-sm-block">
                                    <div class="me-4">
                                        <label class="lead fw-semibold">Start Date</label>
                                        <input type="date" class="form-control mt-2 form-control-lg fw-normal">
                                    </div>

                                    <div class="me-4 mt-lg-0 mt-sm-2">
                                        <label class="lead fw-semibold">End Date</label>
                                        <input type="date" class="form-control mt-2 form-control-lg fw-normal">
                                    </div>

                                    <div class="pt-4 mr-auto d-flex">
                                        <input type="text" class="search-query form-control" placeholder="Search" />
                                    
                                        <button class="btn btn-danger click_me" type="button">
                                            <span><i class="bi bi-search"></i></span>
                                        </button>
                                        
                                    </div>
                                </div>
                                <ul class="unstyled inbox-pagination">
                                    <li><span>1-12 of 234</span></li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="bi bi-chevron-left  pagination-left"></i></a>
                                    </li>
                                    <li>
                                            <a class="np-btn" href="#"><i class="bi bi-chevron-right pagination-right"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <table class="table table-inbox table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="bi bi-star"></i></td>
                                        <td class="view-message  dont-show">Maize</td>
                                        <td class="view-message">Terminated</td>
                                        <td class="view-message text-right">March 15</td>
                                        <td class="view-message  inbox-small-cells"></td>
                                        <td class="view-message"><button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Track</button></td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog track-level">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="bi bi-star"></i></td>
                                        <td class="view-message dont-show">Tomato </td>
                                        <td class="view-message">Delivered</td>
                                        <td class="view-message text-right">March 15</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message">Completed</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="bi bi-star"></i></td>
                                        <td class="view-message dont-show">Plan </td>
                                        <td class="view-message">Delivered</td>
                                        <td class="view-message text-right">March 15</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message">Completed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--End Tracker-->

                        <!--order-->
                        <div class="tab-pane fade" data-bs-spy="scroll" id="pills-order" role="tabpanel" aria-labelledby="order-tab">
                            <h2 class="fw-semibold py-3 ps-5">Order</h2>

                            <hr class="adjust-top">
                            <!--one-->
                            <div class="d-flex box-chat py-3">
                                <div class="w-50">
                                    <p class="lead fw-semibold ps-5 pt-3">1</p>
                                </div>

                                <div class="w-100">
                                    <p class="lead fw-semibold text-center pt-3">#1000</p>
                                </div>

                                <div class="w-100">
                                    <p class="lead fw-semibold text-center pt-3">20 dozen of Plantain</p>
                                </div>

                                <div class="w-100">
                                    <a class="btn btn-success fs-5 fw-semibold btn-view px-3" href="view-order.php" role="button">View</a>
                                </div>
                            </div><!--End one-->

                            <!--two-->
                            <div class="d-flex mess_hover py-3">
                                <div class="w-50">
                                    <p class="lead fw-semibold ps-5 pt-3">1</p>
                                </div>
                                
                                <div class="w-100">
                                    <p class="lead fw-semibold text-center pt-3">#1000</p>
                                </div>

                                <div class="w-100">
                                    <p class="lead fw-semibold text-center pt-3">20 dozen of Plantain</p>
                                </div>

                                <div class="w-100">
                                    <a class="btn btn-success fs-5 fw-semibold btn-view px-3" href="view-order.php" role="button">View</a> 
                                </div>
                            </div><!--End two-->

                            <!--three-->
                            <div class="d-flex mess_hover py-3">
                                <div class="w-50">
                                    <p class="lead fw-semibold ps-5 pt-3">1</p>
                                </div>

                                <div class="w-100">
                                    <p class="lead fw-semibold text-center pt-3">#1000</p>
                                </div>

                                <div class="w-100">
                                    <p class="lead fw-semibold text-center pt-3">20 dozen of Plantain</p>
                                </div>

                                <div class="w-100">
                                    <a class="btn btn-success fs-5 fw-semibold btn-view px-3" href="view-order.php" role="button">View</a> 
                                </div>
                            </div><!--End three-->
                            
                        </div><!--End order-->

                        <!--report-->
                        <div class="tab-pane fade" data-bs-spy="scroll" id="pills-report" role="tabpanel" aria-labelledby="report-tab">
                            <h2 class="fw-semibold py-3 ps-5">Report</h2>

                            <hr class="adjust-top">

                            <div class="track-option align-items-center">
                                <div class="chk-all d-flex">
                                    <div class="me-4">
                                        <label class="lead fw-semibold">Start Date</label>
                                        <input type="date" class="form-control mt-2 form-control-lg fw-normal">
                                    </div>

                                    <div class="me-4">
                                        <label class="lead fw-semibold">End Date</label>
                                        <input type="date" class="form-control mt-2 form-control-lg fw-normal">
                                    </div>

                                    <div class="pt-4">
                                        <button class="btn btn-success btn-lg" type="button">Export </button>
                                    </div>
                                </div>
                                <ul class="unstyled inbox-pagination">
                                    <li><span>1-12 of 234</span></li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="bi bi-chevron-left  pagination-left"></i></a>
                                    </li>
                                    <li>
                                            <a class="np-btn" href="#"><i class="bi bi-chevron-right pagination-right"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <table class="table table-inbox table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="bi bi-star"></i></td>
                                        <td class="view-message  dont-show">Maize</td>
                                        <td class="view-message">Terminated</td>
                                        <td class="view-message text-right">March 15</td>
                                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message"><button class="btn btn-success " type="button">Track</button></td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="bi bi-star"></i></td>
                                        <td class="view-message dont-show">Tomato </td>
                                        <td class="view-message">Delivered</td>
                                        <td class="view-message text-right">March 15</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message">Completed</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="bi bi-star"></i></td>
                                        <td class="view-message dont-show">Plan </td>
                                        <td class="view-message">Un-deliverd</td>
                                        <td class="view-message text-right">March 15</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message">Completed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--End report-->

                        <!--Setting-->
                        <div class="tab-pane fade" data-bs-spy="scroll" id="pills-setting" role="tabpanel" aria-labelledby="setting-tab">
                            <h2 class="fw-semibold py-3 ps-5">Setting</h2>

                            <hr class="adjust-top">



                            <div>
                                <div class="mb-3 mx-lg-5 mx-sm-0 mb-3">
                                    <label class="fw-semibold lead">Name</label>
                                    <input type="text" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Abubakar Ahmed" disabled>
                                </div>

                                <div class="mb-3 mx-lg-5 mx-sm-0 mb-3">
                                    <label class="fw-semibold lead">Email</label>
                                    <input type="email" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="abubakarola234@gmail.com" disabled>
                                </div>

                                <div class="mb-3 mx-lg-5 mx-sm-0 mb-3">
                                    <label class="fw-semibold lead">Password</label>
                                    <input type="password" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder=".............." disabled>
                                </div>

                                <ul class="nav align-items-center w-100">
                                    <li class="nav-item ms-auto me-lg-5 me-sm-3"><button class="btn btn-success btn-lg lead fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#edit">Edit</button></li>
                                </ul>
                            </div>

                            <div class="collapse nav-collapse w-100 mt-3" id="edit">
                                <form>
                                    <div class="mb-3 mx-lg-5 mx-sm-0 mb-3">
                                        <label class="fw-semibold lead">Name</label>
                                        <input type="text" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Abubakar Ahmed">
                                    </div>

                                    <div class="mb-3 mx-lg-5 mx-sm-0 mb-3">
                                        <label class="fw-semibold lead">Email</label>
                                        <input type="email" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="abubakarola234@gmail.com">
                                    </div>

                                    <div class="mb-3 mx-lg-5 mx-sm-0 mb-3">
                                        <label class="fw-semibold lead">Password</label>
                                        <input type="password" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="..............">
                                    </div>
                                
                                    <div class="mx-lg-5 mx-sm-0 mb-3">
                                        <button class="btn btn-success lead btn-lg fw-semibold reset-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div><!--End setting-->

                        <!--Upgrade-->
                        <div class="tab-pane fade" data-bs-spy="scroll" id="pills-upgrade" role="tabpanel" aria-labelledby="upgrade-tab">
                            <h2 class="fw-semibold py-3 ps-5">Upgrade</h2>
                            <hr class="adjust-top">

                            <div class="mx-5 mt-3">
                                <h4 class="">You are currently on <span><button class="btn btn-success lead fw-semibold">LITE</button></span></h4>

                                <div class="d-flex mt-3">
                                    <label class="fw-semibold lead pt-3 pe-3">Upgrade to:</label>
                                    <select class="form-select form-select-lg mt-2 fw-normal bg-light upgrade-form" aria-label=".form-select-lg example">
                                        <option selected>Upgrade your Service</option>
                                        <option value="1">PRO</option>
                                        <option value="2">PREMIUM</option>
                                    </select>
                                </div>
                            </div>
                        </div><!--End Upgrade-->

                        <!--password-->
                        <div class="tab-pane fade" data-bs-spy="scroll" id="pills-password" role="tabpanel" aria-labelledby="password-tab">
                            <h2 class="fw-semibold py-3 ps-5">Password Reset</h2>

                            <hr class="adjust-top">

                            <div class="mb-3">
                                <div class="mb-3 mx-lg-5 mx-sm-0">
                                    <label class="fw-semibold lead">Old Password</label>
                                    <input type="password" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Password">
                                </div>
            
                                <div class="mb-3 mx-lg-5 mx-sm-0 mb-3">
                                    <label class="fw-semibold lead">New Password</label>
                                    <input type="password" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Confirm Password">
                                </div>

                                <div class="mb-5 mx-lg-5 mx-sm-0">
                                    <label class="fw-semibold lead">Confirm New Password</label>
                                    <input type="password" class="form-control form-control-lg mt-2 fw-normal bg-light" placeholder="Confirm Password">
                                </div>

                                <div class="mx-lg-5 mx-sm-0">
                                    <button class="btn btn-success lead btn-lg fw-semibold reset-btn">Submit</button>
                                </div>
                                
                            </div>
                            
                        </div><!--End password-->
                    </div><!--End right session-->
    
                </div>
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
<?php include 'inc/header.php'; ?>
<!-- main-menu start-->
<div class="main-menu">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('frontend/img/category/1.jpg')}}" style="" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Powerstroke <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cummins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Duramax</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">EcoDiesel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Heavy/Light Duty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">XDP Gear</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">My Account</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <button class="btn my-2 my-sm-0" type="submit">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </form>
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">0</button>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div> <!-- main-menu end-->

<!-- scroll-narbar start-->
<div class="navscroll">
    <div class="container-fluid p-0">
        <!-- search box toggle show -->
        <div class="search-toggle-show" id="close_search">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <input type="text" name="" id="search" placeholder="Search">

                        <button type="button" onclick="close_search()"><i class="far fa-window-close"></i></button>
                    </form>
                </div>
            </div>				
        </div><!-- search box toggle show end-->

        <div class="row" id="hide-for-search">
            <div class="col-2">
                <div class="logo-navscroll">
                    <a href="">
                        <img src="{{ asset('frontend/img/category/1.jpg') }}" style="" alt="">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <ul class="scrollnav">
                    <li> <i class="fas fa-align-justify"></i> Show All <i class="fas fa-angle-down"></i>
                        <ul>
                            <li><a href="#">TRUCK</a></li>
                            <li><a href="#">Jeep</a>
                                <ul class="mega-menu">
                                    <div class="menu-col">
                                        <h2 class="heading">Welcome</h2>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                    </div>
                                    <div class="menu-col">
                                        <h2 class="heading">Welcome</h2>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                    </div>
                                    <div class="menu-col">
                                        <h2 class="heading">Welcome</h2>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">MARINE</a></li>
                            <li><a href="#">RV</a></li>
                            <li><a href="#">PERFORMANCE PACKAGES</a></li>
                            <li><a href="#">SALE</a>
                                <ul class="mega-menu">
                                    <div class="menu-col">
                                        <h2 class="heading">Welcome</h2>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                    </div>
                                    <div class="menu-col">
                                        <h2 class="heading">Welcome</h2>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                    </div>
                                    <div class="menu-col">
                                        <h2 class="heading">Welcome</h2>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                        <p><a href="">Liinks</a></p>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <div class="search-boxs">
                    <form action="">
                        <input type="text" name="" id="" placeholder="Search">
                        <button type="button" onclick="closesearch()"><i class="fab fa-searchengin"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-2">
                <div class="my-account">
                    <a href="">My Account</a>
                    <p>Access My Garage </p>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <form class="">
                        <button class="btn" type="submit">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                        <button class="btn btn-outline-danger" type="submit">0</button>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- scroll-narbar end-->
</div>
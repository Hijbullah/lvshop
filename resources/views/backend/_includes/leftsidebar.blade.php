
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="{{ asset('backend/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="#"><img src="{{ asset('backend/images/profile_av.jpg') }}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ auth()->guard('admin')->user()->name }}</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="#"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Chat Apps</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Projects</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Projects List</a></li>
                    <li><a href="#">Taskboard</a></li>
                    <li><a href="#">Ticket List</a></li>
                    <li><a href="#">Ticket Detail</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Product List</a></li>
                    <li><a href="#">Product detail</a></li>
                </ul>
            </li>




            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Authentication</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Forgot Password</a></li>
                    <li><a href="#">Page 404</a></li>
                    <li><a href="#">Page 500</a></li>
                    <li><a href="#">Page Offline</a></li>
                    <li><a href="#">Locked Screen</a></li>
                </ul>
            </li>

            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Administrator</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Admins Section</a></li>
                    <li><a href="#">Roles Section</a></li>
                    <li><a href="#">Permissions section</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

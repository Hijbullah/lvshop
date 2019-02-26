<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{asset('backend/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'LV SHOP') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->guard('admin')->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header text-uppercase">Sales Management</li>
                <li class="nav-item">
                    <a href="{{ url('admin/orders') }}" class="nav-link {{ request()->is('admin/orders*') ? 'active' : '' }}">
                            <i class="fas fa-dolly nav-icon"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/sales') }}" class="nav-link {{ request()->is('admin/sales*') ? 'active' : '' }}">
                        <i class="fas fa-shopping-cart nav-icon"></i>
                        <p>Sales</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/deliverys') }}" class="nav-link {{ request()->is('admin/delivery*') ? 'active' : '' }}">
                        <i class="fas fa-truck nav-icon"></i>
                        <p>delivery</p>
                    </a>
                </li>
                <li class="nav-header text-uppercase">Stock Management</li>
                <li class="nav-item">
                    <a href="{{ route('brands.index') }}" class="nav-link {{ request()->is('admin/brands*') ? 'active' : '' }}">
                        <i class="fas fa-building nav-icon"></i>
                        <p>Brands</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/suppliers') }}" class="nav-link {{ request()->is('admin/supplier*') ? 'active' : '' }}">
                        <i class="fas fa-dolly-flatbed nav-icon"></i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                        <i class="fas fa-suitcase-rolling nav-icon"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link {{ request()->is('admin/products*') ? 'active' : '' }}">
                        <i class="fab fa-product-hunt nav-icon"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/receivings') }}" class="nav-link {{ request()->is('admin/receiving*') ? 'active' : '' }}">
                        <i class="fas fa-level-down-alt nav-icon"></i>
                        <p>Receiving</p>
                    </a>
                </li>
                <li class="nav-header text-uppercase">Administration</li>
                <li class="nav-item">
                    <a href="{{ route('admins.index') }}" class="nav-link {{ request()->is('admin/admins*') ? 'active' : '' }}">
                        <i class="fas fa-unlock-alt nav-icon"></i>
                        <p>Admins</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customers') }}" class="nav-link {{ request()->is('admin/customers*') ? 'active' : '' }}">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-header text-uppercase">Others</li>
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>  
            </ul>
        </nav>
    </div>
</aside>
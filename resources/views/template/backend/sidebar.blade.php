<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend_theme/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                {{-- dashboard --}}
                <li class="nav-item ">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- Categories Item --}}
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('categories-item.index') }}" class="nav-link">
                                <i class="fas fa-cube nav-icon"></i>
                                <p>Item</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories-color.index') }}" class="nav-link">
                                <i class="fas fa-palette nav-icon"></i>
                                <p>Color</p>
                            </a>
                        </li>
                        <div class="nav-item">
                            <a href="{{ route('brand-item.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-copyright"></i>
                                <p>
                                    Brand
                                </p>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="{{ route('size-item.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-tshirt"></i>
                                <p>
                                    Size
                                </p>
                            </a>
                        </div>
                    </ul>
                </li>
                {{-- items  --}}
                <div class="nav-item">
                    <a href="{{ route('items.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Items
                        </p>
                    </a>
                </div>
                {{-- tickets  --}}
                <div class="nav-item">
                    <a href="{{ route('coupon.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Coupon
                        </p>
                    </a>
                </div>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

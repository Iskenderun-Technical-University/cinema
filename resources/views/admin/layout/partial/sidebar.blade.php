<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cinema MS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ \Auth::user()->first_name.' '. Auth::user()->last_name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library
                  -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header"> ADMIN MENU</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="far fa-list nav-icon"></i>
                                <p>Users List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.create') }}" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Add New User</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-theater-masks"></i>
                        <p>
                            Cinemas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('cinemas.index') }}" class="nav-link">
                                <i class="far fa-list nav-icon"></i>
                                <p>Cinemas List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cinemas.create') }}" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Add New Cinema</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-film"></i>
                        <p>
                            Movies
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('movies.index') }}" class="nav-link">
                                <i class="far fa-list nav-icon"></i>
                                <p>Movies List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('movies.create') }}" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Add New Movie</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-chair"></i>
                        <p>
                            Seats
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('seats.index') }}" class="nav-link">
                                <i class="far fa-list nav-icon"></i>
                                <p>All Seats List</p>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-chair"></i>
                        <p>
                            Sessions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('sessions.index') }}" class="nav-link">
                                <i class="far fa-list nav-icon"></i>
                                <p>All Sessions List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sessions.create') }}" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Add New Session</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-child"></i>
                        <p>
                            Customer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('customers.index') }}" class="nav-link">
                                <i class="far fa-list nav-icon"></i>
                                <p>All Customer List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-child"></i>
                        <p>
                            Tickets
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('tickets.index') }}" class="nav-link">
                                <i class="far fa-ticket nav-icon"></i>
                                <p>All Ticket List</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

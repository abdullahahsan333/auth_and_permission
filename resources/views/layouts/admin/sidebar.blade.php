

        <!-- Start Sidebar Area -->
        <div class="sidebar-area" id="sidebar-area">
            <div class="logo position-relative">
                <a href="index.html" class="d-block text-decoration-none">
                    <img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo-icon">
                    <span class="logo-text fw-bold text-dark">Devzet</span>
                </a>
                <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
                    <i data-feather="x"></i>
                </button>
            </div>

            <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
                <ul class="menu-inner">

                    @can('dashboard')
                        <li class="menu-item open">
                            <a href="{{ url('home') }}" class="menu-link active">
                                <i data-feather="grid" class="menu-icon tf-icons"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                    @endcan

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i data-feather="grid" class="menu-icon tf-icons"></i>
                            <span class="title">Role & Permission</span>
                        </a>

                        <ul class="menu-sub">
                            @can('view role')
                            <li class="menu-item">
                                <a href="{{ url('roles') }}" class="menu-link">Role</a>
                            </li>
                            @endcan

                            @can('view permission')
                            <li class="menu-item">
                                <a href="{{ url('permissions') }}" class="menu-link">Permission</a>
                            </li>
                            @endcan

                            @can('view user')
                            <li class="menu-item">
                                <a href="{{ url('users') }}" class="menu-link">User</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                </ul>
            </aside>

            <div class="bg-white z-1 admin">
                <div class="d-flex align-items-center admin-info border-top">
                    <div class="flex-shrink-0">
                        <a href="profile.html" class="d-block">
                            <img src="{{ asset('assets/images/admin.jpg') }}" class="rounded-circle wh-54" alt="admin">
                        </a>
                    </div>
                    <div class="flex-grow-1 ms-3 info">
                        <a href="profile.html" class="d-block name">Adison Jeck</a>
                        <a href="logout.html">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Area -->

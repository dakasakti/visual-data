<nav
    class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
>
    <!-- Sidebar Toggle (Topbar) -->
    <button
        id="sidebarToggleTop"
        class="btn btn-link d-md-none rounded-circle mr-3"
    >
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a
                class="nav-link dropdown-toggle"
                href="#"
                id="userDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                @if (Auth::check())
                <span
                    class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >{{ Auth::user()->name }}</span
                >

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    ({{ implode(', ',Auth::user()->getRoleNames()->toArray())



                    }})
                </span>
                @else
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Guest</span
                >
                @endif

                <img
                    class="img-profile rounded-circle"
                    src="{{ $imageProfile }}"
                    alt=""
                />
            </a>
            <!-- Dropdown - User Information -->
            <div
                class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown"
            >
                <a class="dropdown-item" href="/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/sesi/logout">
                    <i
                        class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

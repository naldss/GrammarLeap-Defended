<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">

    <a class="sidebar-brand-1 d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-logo logo"></div>
        <div class="sidebar-brand-text mx-3 text-gray-100">GrammarLeap</div>
    </a>
    <div class="topbar-divider d-none d-sm-block"></div>
    <a class="text-gray-200 text-s ml-4" href="{{ route('dashboard') }}">📊 Dashboard</a>
    <a class="text-gray-200 text-s ml-4" href="{{ route('classicstudy') }}">📝 ClassicStudy</a>
    {{-- <a class="text-gray-200 text-s mx-2" href="">QuizRooms</a> --}}
    <a class="text-gray-200 text-s ml-4" href="{{ route('games') }}">🎯 Games</a>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3 d-none d-lg-inline text-gray-100 text-s">{{ $name }} </span> <span class="ml-1">🔽</span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
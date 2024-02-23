<!-- Sidebar -->
@include('layouts.header')

<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center mt-3 mb-3" href="{{ url('/database') }}">
        <div class="sidebar-brand-icon mt-3">
            <img src="{{ asset('images/kisel.png') }}" width="40%">
        </div>
    </a>

    <li class="nav-item {{ $title === 'Home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/database') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

   
    {{-- @if (auth()->user()->hasRole('admin'))
        <li class="nav-item {{ $title === 'Create Data' ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/tambahdata') }}">
                <i class="fa-solid fa-circle-plus"></i>
                <span>Create Data</span>
            </a>
        </li>
    @endif --}}

    <li class="nav-item {{ $title === 'Diagram' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/diagram') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Chart</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

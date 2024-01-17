@if (session()->has('logout'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('logout') }}
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('middleware'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('middleware') }}
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('guest'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('guest') }}
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ Session::get('error') }}
    </div>
@endif
@if (Session::has('bisalogin'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ Session::get('bisalogin') }}
    </div>
@endif

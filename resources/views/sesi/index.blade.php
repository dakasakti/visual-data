@include('layouts.header')

<body class="bg-gradient-dark">
    <div class="container" id="login">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    @if (session()->has('berhasil'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('berhasil') }}
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
                                    <img class="mb-2 image" src="{{ asset('/images/kisel.png') }}" alt="chania"
                                        style="width:20%;">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Please Login</h1>
                                    </div>
                                    <form action="/sesi/login" method="POST" class="user" novalidate>
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" name="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror "
                                                id="email" placeholder="name@example.com" autofocus required
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="password" placeholder="Password" required>
                                        </div>
                                        <button class="btn btn-dark w-100 py-2 mt-3 btn-user"
                                            type="submit">Login</button>
                                    </form>
                                    <hr>
                                    <small class="d-block text-center mt-3">Not registered?<a href="sesi/register"> Register
                                            Now!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script


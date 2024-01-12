@include('layouts.header')
<link rel="icon" href="{{ asset('/images/kisel.png') }}" type="image/x-icon">


<body class="bg-gradient-dark">


    <div class="container">


        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <img class="mb-2 image" src="{{ asset('/images/kisel.png') }}" alt="chania" style="width:20%;">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registration Form</h1>
                            </div>
                            <form action="/sesi/create" method="POST" class="user">
                                @csrf
                                <div class="form-group ">
                                        <label for="floatingInput">Name</label>
                                        <input type="text" name="name" id="name" class="form-control form-control-user  @error('name') is-invalid @enderror"
                                        placeholder="Name" autofocus required value="{{ old('name') }}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}  
                                            </div>
                                            @enderror
                                </div>
                                    <div class="form-group">
                                            <label for="floatingInput">Username</label>
                                            <input type="text" name="username" id="username" class="form-control form-control-user @error('username') is-invalid @enderror"
                                            placeholder="Username" required  value="{{ old('username') }}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror  
                                    </div>
                                <div class="form-group">
                                        <label for="floatingInput">Email address</label>
                                        <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                                         placeholder="name@example.com"required  value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>"
                                            @enderror
                                </div>
                                    <div class="form-group">
                                        <label for="floatingPassword">Password</label>
                                        <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password"required>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                <button class="btn btn-dark w-100 py-2 mt-3 btn-user" type="submit">Register</button>


                            </form>
                                <hr>
                                    <small class="d-block text-center mt-3">Already registered?<a href="/sesi ">Login</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>



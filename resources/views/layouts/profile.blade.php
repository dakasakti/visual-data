@include('layouts.header')

<div class="container mt-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-danger" href="{{ url('/database') }}"><i class="fa-solid fa-arrow-left"></i></a>
            <h4 class="text-center"> Profile</h4>
        </div>

        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="d-flex flex-column align-items-center">
                <img class="profile-user-img img-thumbnail mb-3" src="{{ asset('images/' . Auth::user()->image) }}"
                    alt="User profile picture" style="max-width: 100px; height: 100px; border-radius: 50%;">

                <h3 class="profile-username mb-0"> {{ Auth::user()->name }}</h3>

                <ul class="list-group list-group-flush text-left mt-4">
                    <li class="list-group-item">
                        <b>Role : </b> <span class="float-right"> {{ Auth::user()->role }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Email : </b> <span class="float-right ml-5"> {{ Auth::user()->email }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Bergabung : </b> <span
                            class="float-right">{{ Auth::user()->created_at->format('Y-m-d') }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="/update/profile" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="updateName">Update Nama:</label>
                    <input type="text" class="form-control" id="updateName" name="name">
                </div>

                <div class="form-group">
                    <label for="updateEmail">Update Email:</label>
                    <input type="email" class="form-control" id="updateEmail" name="email">
                </div>
                <div class="form-group">
                    <label for="photo">Update Foto:</label>
                    <input type="file" class="form-control" id="images" name="images">
                </div>



                <button type="submit" class="btn btn-primary float-right"> Update</button>
            </form>
        </div>
    </div>
</div>

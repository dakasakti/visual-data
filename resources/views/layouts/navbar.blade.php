@include('layouts.header')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            {{-- <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/filter-data" method="GET">


                            <div class="form-inline">
                                <div class="col-auto">
                                    <label for="start_date">Tanggal mulai : </label>
                                    <input type="date" class="form-control" name="start_date"
                                        value="{{ old('start_date') }}">
                                </div>
                                <div class="col-auto">
                                    <label for="end_date">Tanggal akhir : </label>
                                    <input type="date" class="form-control" name="end_date"
                                        value="{{ old('end_date') }}">
                                </div>
                                <div class="col w-10">
                                    <label for="customer_name">Nama customer : </label>
                                    @if (isset($dropdown['NAMA_CUSTOMER']))
                                        <select class="form-select" name="customer_name" id="NAMA_CUSTOMER"
                                            aria-label="Size 3 select example" required value="{{ old('NAMA_CUSTOMER') }}">
                                            <optgroup label="Nama customer yang akan di filter">
                                                @foreach ($dropdown['NAMA_CUSTOMER'] as $id => $NAMA_CUSTOMER)
                                                    <option value="{{ $id }}">{{ $NAMA_CUSTOMER }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    @endif
                                </div>
                                <div class="col-auto mt-4">
                                    <button type="submit" class="btn btn-outline-primary""><i class="fa-solid fa-filter"></i> Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Auth::check())
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>

                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                ({{ implode(', ',Auth::user()->getRoleNames()->toArray()) }})
                            </span>
                        @else
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guest</span>
                        @endif

                        <img class="img-profile rounded-circle" src="{{ asset('images/' . Auth::user()->image) }}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
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
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>
            <script>
                $(document).ready(function() {
                    $("#name").on('keyup', function() {
                        var value = $(this).val();
                        $.ajax({
                            url: {{ url('/database') }},
                            data: {
                                'NAMA_CUSTOMER': value
                            },
                            success: function(data) {
                                $("#customer_list").html(data);
                            }
                        });
                    });
                    $(document).on('click', 'li', function() {
                        var value = $(this).text();
                        $("#name").val(value);
                        i
                        $("#customer_list").html("");
                    });
                });
            </script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="..."></script>
            <script>
                $(document).ready(function() {
                    $('.dropdown-toggle').dropdown();
                });
            </script>
        </nav>

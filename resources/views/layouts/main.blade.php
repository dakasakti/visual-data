<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>KSS | {{ $title }}</title>
        <link
            rel="icon"
            href="{{ asset('/images/kisel.png') }}"
            type="image/x-icon"
        />

        <!-- Custom fonts for this template -->
        <link
            href="{{
                asset('sbadmin/vendor/fontawesome-free/css/all.min.css')
            }}"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
        />
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />

        <!--Select2-->
        <link
            href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />

        <!--Datatables-->
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"
        />

        <!--Sweetalert-->
        <link
            href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css"
            rel="stylesheet"
        />

        <!--DatePicker-->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
        />

        <!-- Custom styles for this template -->
        <link
            rel="stylesheet"
            href="{{ asset('AdminLTE/css/sb-admin-2.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('AdminLTE/css/sb-admin-2.css') }}"
        />

        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css"
        />

        <link
            href="{{
                asset('sbadmin')
            }}/vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />

        <!-- Custom styles for this template-->
        <link
            href="{{ asset('sbadmin') }}/css/sb-admin-2.min.css"
            rel="stylesheet"
        />

        <style>
            table.table-hover tbody tr:hover {
                background-color: #f5f5f5;
            }

            th,
            td {
                text-align: center;
            }

            .btn-action {
                margin-right: 5px;
            }

            .table-custom {
                border-radius: 13px;
                overflow: hidden;
            }
            .card-custom {
                border-radius: 20px;
                overflow: hidden;
            }
            .hide-row {
                display: none;
            }

            .show-row {
                display: table-row;
            }
        </style>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            @include('layouts.main.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('layouts.main.navbar')
                    @include('modal.importmodal')
                    @include('modal.exportmodal')
                    @yield('content')
                </div>
                <!-- Footer -->
                @include('layouts.main.footer')
                <!-- End of Footer -->
            </div>
        </div>

        <!-- Select2---->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="{{
                asset('AdminLTE')
            }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{
                asset('AdminLTE')
            }}/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <!-- Page level plugins -->
        <script src="{{
                asset('AdminLTE/vendor/chart.js/Chart.min.js')
            }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{
                asset('AdminLTE')
            }}/js/demo/chart-area-demo.js"></script>
        <script src="{{
                asset('AdminLTE')
            }}/js/demo/chart-pie-demo.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/collect.js/4.36.1/collect.min.js"
            integrity="sha512-aub0tRfsNTyfYpvUs0e9G/QRsIDgKmm4x59WRkHeWUc3CXbdiMwiMQ5tTSElshZu2LCq8piM/cbIsNwuuIR4gA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".dropdown-toggle").dropdown();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script>
            $(document).ready(function () {
                $("#name").on("keyup", function () {
                    var value = $(this).val();
                    $.ajax({
                        url: '{{ url("/database") }}',
                        data: {
                            NAMA_CUSTOMER: value,
                        },
                        success: function (data) {
                            $("#customer_list").html(data);
                        },
                    });
                });
                $(document).on("click", "li", function () {
                    var value = $(this).text();
                    $("#name").val(value);
                    i;
                    $("#customer_list").html("");
                });
            });
        </script>
        <script>
            $(".delete").click(function () {
                var databaseid = $(this).attr("data-id");
                var nama = $(this).attr("data-nama");

                swal({
                    title: "Yakin?",
                    text:
                        "Ingin menghapus data dengan nama customer : " +
                        nama +
                        " dengan id " +
                        databaseid +
                        "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete/" + databaseid + "";
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak dihapus");
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#per_page").on("change", function () {
                    var perPageValue = parseInt($(this).val());
                    $(".table-custom tbody tr").removeClass("hide-row");

                    if (perPageValue > 0) {
                        var rows = $(".table-custom tbody tr");
                        var totalRows = rows.length;

                        rows.each(function (index) {
                            if (index >= perPageValue) {
                                $(this).addClass("hide-row");
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>

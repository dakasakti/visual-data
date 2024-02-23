@include('layouts.header')

@include('modal.importmodal')
@include('modal.exportmodal')

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


<div class="container-fluid ">

    @if (Session::has('bisalogin'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ Session::get('bisalogin') }}
        </div>
    @endif
    @if (Session::has('guest'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ Session::get('guest') }}
        </div>
    @endif

    <div class="col-auto mb-4 form-inline d-flex justify-content-between">

        <div class="form-inline">
            <button type="button" class="btn btn-primary" data-bs-target="#exportmodal" data-bs-toggle="modal"><i
                    class="fa-solid fa-file-export"></i> Export Excel</button>
            @if (auth()->user()->hasRole('admin'))
                <button type="button" class="btn btn-outline-secondary ml-4" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="fa-solid fa-file-import"></i> Import Excel</button>
            @endif
        </div>
    </div>

    <div class="card shadow mb-4 float-end card-custom">
        <div class="card-header py-3  ">
            <form id="perPageForm">
                <div class="col-1">
                    <select id="per_page" class="form-select">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="51">50</option>
                        <option value="101">100</option>
                    </select>
                </div>
            </form>

        </div>
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

        @if (Session::has('gagaleksport'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('gagaleksport') }}
            </div>
        @endif

        <!---start filter--->
        <div class="card-body">
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
                                <button type="submit" class="btn btn-outline-primary"><i
                                        class="fa-solid fa-filter"></i> Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!---end filter--->

        <div class="container-fluid mt-3">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-custom" id="example" width="100%"
                    cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">ORG CODE</th>
                            <th scope="col">NAMA CUSTOMER</th>
                            <th scope="col">KODE PRODUK</th>
                            <th scope="col">AMMOUNT</th>
                            <th scope="col">HARGA JUAL</th>
                            <th scope="col">TRX</th>
                            <th scope="col">TYPE MITRA</th>
                            <th scope="col">AMMOUNT FIX</th>
                            <th scope="col">PRODUK FIX</th>
                            <th scope="col">BUCKET NAME</th>
                            <th scope="col">Type Produk</th>
                            <th scope="col">TYPE BISNIS</th>
                            <th scope="col">REV INPPN</th>
                            <th width="180px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->Tanggal)->format('d/m/Y') }}</td>
                                <td>{{ $item->ORG_CODE }}</td>
                                <td>{{ $item->NAMA_CUSTOMER }}</td>
                                <td>{{ $item->KODE_PRODUK }}</td>
                                <td>{{ $item->AMMOUNT }}</td>
                                <td>{{ $item->HARGA_JUAL }}</td>
                                <td>{{ $item->TRX }}</td>
                                <td>{{ $item->TYPE_MITRA }}</td>
                                <td>{{ $item->AMMOUNT_FIX }}</td>
                                <td>{{ $item->PRODUK_FIX }}</td>
                                <td>{{ $item->BUCKET_NAME }}</td>
                                <td>{{ $item->Type_Produk }}</td>
                                <td>{{ $item->TYPE_BISNIS }}</td>
                                <td>{{ $item->REV_INPPN }}</td>
                                <td class="mt-2 justify-content-center">
                                    @if (auth()->user()->hasRole('admin'))
                                        <a href="/tampilkandata/{{ $item->id }}"
                                            class="btn btn-primary btn-action">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-action delete"
                                            data-id="{{ $item->id }}" data-nama="{{ $item->NAMA_CUSTOMER }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    @endif

                                    <button class="btn btn-info btn-action view-detail" data-bs-target="#modal-detail"
                                        data-bs-toggle="modal" data-id="{{ $item->id }}"
                                        data-Tanggal="{{ \Carbon\Carbon::parse($item->Tanggal)->format('d/m/Y') }}"
                                        data-org="{{ $item->ORG_CODE }}" data-kode="{{ $item->KODE_PRODUK }}"
                                        data-ammount="{{ $item->AMMOUNT }}" data-nama="{{ $item->NAMA_CUSTOMER }}"
                                        data-harga="{{ $item->HARGA_JUAL }}" data-trx="{{ $item->TRX }}"
                                        data-typem="{{ $item->TYPE_MITRA }}"
                                        data-ammountf="{{ $item->AMMOUNT_FIX }}"
                                        data-produk="{{ $item->PRODUK_FIX }}" data-bucket="{{ $item->BUCKET_NAME }}"
                                        data-typep="{{ $item->Type_Produk }}" data-typeb="{{ $item->TYPE_BISNIS }}"
                                        data-revin="{{ $item->REV_INPPN }}" data-pajak="{{ $item->PAJAK }}"
                                        data-revex="{{ $item->REV_EXPPN }}" data-hpp="{{ $item->HPP }}"
                                        data-thi="{{ $item->TOTAL_HPP_INPPN }}"
                                        data-the="{{ $item->TOTAL_HPP_EXPPN }}"
                                        data-margini="{{ $item->Margin_INPPN }}"
                                        data-margine="{{ $item->Margin_EXPPN }}" data-hari="{{ $item->Hari }}"
                                        data-bulan="{{ $item->Bulan }}" data-ketprod="{{ $item->KET_PROD }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex mt-3 justify-content-center">
            {{ $data->appends(['per_page' => $request->per_page])->links() }}
        </div>
        
        <div class="d-flex mt-3 justify-content-center pb-2">
            showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} entries
        </div>
    </div>
    @include('layouts.footer')




    @foreach ($data as $item)
        @include('modal.detailmodal', ['data' => $item])
    @endforeach



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
        $('.delete').click(function() {
            var databaseid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');

            swal({
                    title: "Yakin?",
                    text: "Ingin menghapus data dengan nama customer : " + nama + " dengan id " + databaseid +
                        "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete/" + databaseid + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak dihapus");
                    }
                });


        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    

<script>
$(document).ready(function () {
    $('#per_page').on('change', function () {
        var perPageValue = parseInt($(this).val());
        $('.table-custom tbody tr').removeClass('hide-row');

        if (perPageValue > 0) {
            var rows = $('.table-custom tbody tr');
            var totalRows = rows.length;

            rows.each(function (index) {
                if (index >= perPageValue) {
                    $(this).addClass('hide-row');
                }
            });
        }
    });
});
</script>


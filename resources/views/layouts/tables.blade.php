@include('layouts.header')

@include('modal.importmodal')
@include('modal.exportmodal')



<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-chart-area"></i> Charts</h1>
    <div class="col-auto mb-4 form-inline d-flex justify-content-between">
        <div>
            <a href="{{ url('/tambahdata') }}" class="btn btn-success">New</a>
        </div>
        <div class="form-inline">
            <button type="button" class="btn btn-primary" data-bs-target="#exportmodal" data-bs-toggle="modal"><i
                    class="fa-solid fa-file-export"></i> Export Excel</button>
            <button type="button" class="btn btn-outline-secondary ml-4" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><i class="fa-solid fa-file-import"></i> Import Excel</button>
        </div>
    </div>

    <div class="card shadow mb-4 float-end">
        <div class="card-header py-3  " >
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            <!-- resources/views/nama_view.blade.php -->

            <form id="perPageForm">
                <div class="col-1">
                    <label for="per_page">Show entries:</label>
                    <select id="per_page" name="per_page" class="form-select">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
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
        {{-- <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="/filter-data" method="GET">
                        <div class="text-center">
                            <h5>Filter Pencarian</h5>
                        </div>

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



        <div class="container-fluid mt-3">
            <div class="table-responsive">
                <table class="table " id="example" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">No</th>
                            <th scope="row">Tanggal</th>
                            <th scope="row">ORG CODE</th>
                            <th scope="row">NAMA CUSTOMER</th>
                            <th scope="row">KODE PRODUK</th>
                            <th scope="row">AMMOUNT</th>
                            <th scope="row">HARGA JUAL</th>
                            <th scope="row">TRX</th>
                            <th scope="row">TYPE MITRA</th>
                            <th scope="row">AMMOUNT FIX</th>
                            <th scope="row">PRODUK FIX</th>
                            <th scope="row">BUCKET NAME</th>
                            <th scope="row">Type Produk</th>
                            <th scope="row">TYPE BISNIS</th>
                            <th scope="row">REV INPPN</th>
                            <th width="180px">Action</th>
                        </tr>
                    <tbody class="table-group-divider">
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
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
                                    <a href="/tampilkandata/{{ $item->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i>|</a>
                                    <a href="{{ route('delete', ['id' => $item->id]) }}"
                                        class="fa-solid fa-trash delete" data-id="{{ $item->id }}"
                                        data-nama="{{ $item->NAMA_CUSTOMER }}" style="color: red"> |</a>


                                    <a class="fa-solid fa-eye view-detail" data-bs-target="#modal-detail"
                                        data-bs-toggle="modal" data-id="{{ $item->id }}"
                                        data-Tanggal="{{ \Carbon\Carbon::parse($item->Tanggal)->format('d/m/Y') }}"
                                        data-org="{{ $item->ORG_CODE }}" data-kode="{{ $item->KODE_PRODUK }}"
                                        data-ammount="{{ $item->AMMOUNT }}" data-nama="{{ $item->NAMA_CUSTOMER }}"
                                        data-harga="{{ $item->HARGA_JUAL }}" data-trx="{{ $item->TRX }}"
                                        data-typem="{{ $item->TYPE_MITRA }}" data-ammountf="{{ $item->AMMOUNT_FIX }}"
                                        data-produk="{{ $item->PRODUK_FIX }}" data-bucket="{{ $item->BUCKET_NAME }}"
                                        data-typep="{{ $item->Type_Produk }}" data-typeb="{{ $item->TYPE_BISNIS }}"
                                        data-revin="{{ $item->REV_INPPN }}" data-pajak="{{ $item->PAJAK }}"
                                        data-revex="{{ $item->REV_EXPPN }}" data-hpp="{{ $item->HPP }}"
                                        data-thi="{{ $item->TOTAL_HPP_INPPN }}"
                                        data-the="{{ $item->TOTAL_HPP_EXPPN }}"
                                        data-margini="{{ $item->Margin_INPPN }}"
                                        data-margine="{{ $item->Margin_EXPPN }}" data-hari="{{ $item->Hari }}"
                                        data-bulan="{{ $item->Bulan }}" data-ketprod="{{ $item->KET_PROD }}"> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
        <div class="d-flex mt-3 justify-content-center">
            {{ $data->links() }}
        </div>
        <div class="d-flex mt-3 justify-content-center pb-2">
            showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} entries
        </div>

    </div>
    @include('layouts.footer')
</div>


@foreach ($data as $item)
    @include('modal.detailmodal', ['data' => $item])
@endforeach



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
    integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script>
    $('.delete').click(function() {
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');

        swal({
                title: "Yakin?",
                text: "Ingin menghapus data dengan nama customer : " + nama + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/" + id + "",
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                } else {
                    swal("Data tidak dihapus");
                }
            });
    });
</script>

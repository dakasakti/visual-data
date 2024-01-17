@include('layouts.header')

@include('layouts.excel')


<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-chart-area"></i> Charts</h1>
    <div class="col-auto mb-4">
        <a href="{{ url('/tambahdata') }}" class="btn btn-success">New</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
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

        <div class="card-body">
            <div class="row mb-2 mt-1">
                <form action="/database-export" method="get" class="form-inline">
                    <div class="form-group">
                        <label for="filter" class="mr-2">Filter Nama:</label>
                        <input type="text" name="filter" class="form-control mr-2" value="{{ old('nama') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Export to Excel</button>
                    <div class="col-auto">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Import Excel
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-2 mt-1">
                <div class="float-right col-12">
                    <form action="/filter-data" class="form-inline" method="GET">
                        <div class="col-auto">
                            <input type="date" class="form-control" name="start_date">
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control" name="end_date">
                        </div>
                        <div class="col-auto">
                            @if (isset($dropdown['NAMA_CUSTOMER']))
                                <!-- Tampilkan dropdown NAMA_CUSTOMER di sini -->
                                <select class="form-select" name="customer_name" id="NAMA_CUSTOMER"
                                    aria-label="Size 3 select example" required value="{{ old('NAMA_CUSTOMER') }}">
                                    <option value="">--pilih--</option>
                                    @foreach ($dropdown['NAMA_CUSTOMER'] as $id => $NAMA_CUSTOMER)
                                        <option value="{{ $id }}">{{ $NAMA_CUSTOMER }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                <div class="container-fluid">
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
                                                    class="fa-solid fa-pen-to-square"></i>
                                                |</a>


                                            <a href="{{ route('delete', $item->id) }}" class="fa-solid fa-trash delete"
                                                data-id="{{ $item->id }}" data-nama="{{ $item->NAMA_CUSTOMER }}"
                                                style="color: red"> |</a>

                                            <a class="fa-solid fa-eye view-detail" data-bs-toggle="modal"
                                                data-bs-target="#modal-detail" data-item-id="{{ $item->id }}"></a>

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
                    showing
                    {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }}entries
                </div>

            </div>
            @include('layouts.footer')
        </div>

        @foreach ($data as $item)
            @include('modal.detailmodal', ['data' => $item])
        @endforeach



        <script>
            $('.delete').click(function() {
                var databaseid = $(this).attr('data-id');
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
                            window.location = "/delete/" + databaseid + ""
                            swal("Data berhasil dihapus", {
                                icon: "success",
                            });
                        } else {
                            swal("Data tidak dihapus");
                        }
                    });
            });


            <
            script src = "https://code.jquery.com/jquery-3.6.0.min.js"
            integrity = "..." >
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="..."></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="..."></script>
        <script>
            $('.view-detail').on('click', function(event) {
                var button = $(this);
                var itemId = button.data('item-id');
                var modalContent = $('#modal-detail-content');

                var url = 'modal/detailmodal' + itemId;

                modalContent.load(url, function() {
                    $('#modal-detail').modal('show');
                });
            });
        </script>

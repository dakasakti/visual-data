@include('layouts.header')


<!-- Button trigger modal -->


<!-- Modal -->

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
        <div class="card-body">
            <div class="row mb-2 mt-1">
                <div class="col-auto ">
                    <a class="btn btn-danger" href="{{ route('database.export') }}">EXPORT EXCEL</a>
                </div>
                <div class="col-auto  ">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        IMPORT EXCEL
                    </button>
                </div>
                <div class="card-tools col-4">
                    <form action="{{ url('search') }}" class="form-inline" method="GET">
                        <div class="input-group-append">
                            <input type="search" name="search" class="form-control float-end" placeholder="Cari...">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
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


            </div>
            <div class="table-responsive">
                <table class="table table-bordered yajra-datatable" id="example" width="100%" cellspacing="0">
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
                            <th scope="row">PAJAK</th>
                            <th scope="row">REV EXPPN</th>
                            <th scope="row">HPP</th>
                            <th scope="row">TOTAL HPP INPPN</th>
                            <th scope="row">TOTAL HPP EXPPN</th>
                            <th scope="row">Margin INPPN</th>
                            <th scope="row">Margin EXPPN</th>
                            <th scope="row">Hari</th>
                            <th scope="row">Bulan</th>
                            <th scope="row-2">KET PROD</th>
                            <th width="200px">Action</th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->Tanggal }}</td>
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
                                <td>{{ $item->PAJAK }}</td>
                                <td>{{ $item->REV_EXPPN }}</td>
                                <td>{{ $item->HPP }}</td>
                                <td>{{ $item->TOTAL_HPP_INPPN }}</td>
                                <td>{{ $item->TOTAL_HPP_EXPPN }}</td>
                                <td>{{ $item->Margin_INPPN }}</td>
                                <td>{{ $item->Margin_EXPPN }}</td>
                                <td>{{ $item->Hari }}</td>
                                <td>{{ $item->Bulan }}</td>
                                <td>{{ $item->KET_PROD }}</td>
                                {{-- route aksi untuk hapus --}}
                                <td>
                                    <a href="/tampilkandata/{{ $item->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    @csrf
                                    <a href="#"><i class="fa-solid fa-trash delete" data-id="{{ $item->id }}"
                                            data-nama="{{ $item->NAMA_CUSTOMER }}" style="color: red"></i></a>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                        </thead>
                </table>
            </div>
            <div class="d-flex mt-3 justify-content-center">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>




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
</script>
@if (Session::has('success'))
    <script>
        toastr.option = {
            "progressBar": true,
        }
        toastr.success("{{ Session::get('success') }}");
    </script>
@endif

@include('layouts.header')

<div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Create Data</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="datepicker">Choose a Date</label>
                            <input type id="datepicker" name="datepicker" class="form-control flatpickr"
                                placeholder="Select date">
                        </div>
                        <div class="col-md-6">
                            <label for="ORG_CODE" class="form-label">ORG_CODE</label>
                            <select class="form-select" name="ORG_CODE" aria-label="Size 3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['ORG_CODE'] as $id => $ORG_CODE)
                                    <option value="{{ $id }}">{{ $ORG_CODE }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 2 -->
                        <div class="col-md-6">
                            <label for="NAMA_CUSTOMER" class="form-label">NAMA_CUSTOMER</label>
                            <select class="form-select" name="NAMA_CUSTOMER" aria-label="Size 3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['NAMA_CUSTOMER'] as $id => $NAMA_CUSTOMER)
                                    <option value="{{ $id }}">{{ $NAMA_CUSTOMER }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">KODE_PRODUK</label>
                            <select class="form-select" name="KODE_PRODUK" aria-label="Size 3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['KODE_PRODUK'] as $id => $KODE_PRODUK)
                                    <option value="{{ $id }}">{{ $KODE_PRODUK }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 3 -->
                        <div class="col-md-6">
                            <label for="AMMOUNT" class="form-label">AMMOUNT</label>
                            <select class="form-select" name="AMMOUNT" aria-label="Size 3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['AMMOUNT'] as $id => $AMMOUNT)
                                    <option value="{{ $id }}">{{ $AMMOUNT }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">HARGA_JUAL</label>
                            <select class="form-select" name="HARGA_JUAL" aria-label="Size 3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['HARGA_JUAL'] as $id => $HARGA_JUAL)
                                    <option value="{{ $id }}">{{ $HARGA_JUAL }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 4 -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">TRX</label>
                            <select class="form-select" name="TRX" aria-label="Size 3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['TRX'] as $id => $TRX)
                                    <option value="{{ $id }}">{{ $TRX }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">TYPE_MITRA</label>
                            <select class="form-select" name="TYPE_MITRA" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['TYPE_MITRA'] as $id => $TYPE_MITRA)
                                    <option value="{{ $id }}">{{ $TYPE_MITRA }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 5 -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">AMMOUNT_FIX</label>
                            <select class="form-select" name="AMMOUNT_FIX" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['AMMOUNT_FIX'] as $id => $AMMOUNT_FIX)
                                    <option value="{{ $id }}">{{ $AMMOUNT_FIX }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">PRODUK_FIX</label>
                            <select class="form-select" name="PRODUK_FIX" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['PRODUK_FIX'] as $id => $PRODUK_FIX)
                                    <option value="{{ $id }}">{{ $PRODUK_FIX }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 6 -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">BUCKET_NAME</label>
                            <select class="form-select" name="BUCKET_NAME" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['BUCKET_NAME'] as $id => $BUCKET_NAME)
                                    <option value="{{ $id }}">{{ $BUCKET_NAME }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">Type_Produk
                            <label class="form-label">Type_Produk</label>
                            <select class="form-select" name="Type_Produk" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['Type_Produk'] as $id => $Type_Produk)
                                    <option value="{{ $id }}">{{ $Type_Produk }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 7 -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">TYPE_BISNIS</label>
                            <select class="form-select" name="TYPE_BISNIS" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['TYPE_BISNIS'] as $id => $TYPE_BISNIS)
                                    <option value="{{ $id }}">{{ $TYPE_BISNIS }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">REV_INPPN</label>
                            <select class="form-select" name="REV_INPPN" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['REV_INPPN'] as $id => $REV_INPPN)
                                    <option value="{{ $id }}">{{ $REV_INPPN }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 8 -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">REV_EXPPN</label>
                            <select class="form-select" name="REV_INPPN" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['REV_EXPPN'] as $id => $REV_EXPPN)
                                    <option value="{{ $id }}">{{ $REV_EXPPN }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">PAJAK</label>
                            <select class="form-select" name="PAJAK" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['PAJAK'] as $id => $PAJAK)
                                    <option value="{{ $id }}">{{ $PAJAK }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 9 -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">HPP</label>
                            <select class="form-select" name="HPP" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['HPP'] as $id => $HPP)
                                    <option value="{{ $id }}">{{ $HPP }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">TOTAL_HPP_INPPN</label>
                            <select class="form-select" name="TOTAL_HPP_INPPN" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['TOTAL_HPP_INPPN'] as $id => $TOTAL_HPP_INPPN)
                                    <option value="{{ $id }}">{{ $TOTAL_HPP_INPPN }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Kolom 10 -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">TOTAL_HPP_EXPPN</label>
                            <select class="form-select" name="TOTAL_HPP_EXPPN" aria-label="3 select example">
                                <option value="">--pilih--</option>
                                @foreach ($dropdownData['TOTAL_HPP_EXPPN'] as $id => $TOTAL_HPP_EXPPN)
                                    <option value="{{ $id }}">{{ $TOTAL_HPP_EXPPN }}</option>
                                @endforeach
                            </select>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">MARGIN_INPPN</label>
                                <select class="form-select" name="MARGIN_INPPN" aria-label="3 select example">
                                    <option value="">--pilih--</option>
                                    @foreach ($dropdownData['MARGIN_INPPN'] as $id => $MARGIN_INPPN)
                                        <option value="{{ $id }}">{{ $MARGIN_INPPN }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- Kolom 11 -->
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">MARGIN_EXPPN</label>
                                <select class="form-select" name="MARGIN_EXPPN" aria-label="3 select example">
                                    <option value="">--pilih--</option>
                                    @foreach ($dropdownData['MARGIN_EXPPN'] as $id => $MARGIN_EXPPN)
                                        <option value="{{ $id }}">{{ $MARGIN_EXPPN }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Hari</label>
                                <select class="form-select" name="Hari" aria-label="3 select example">
                                    <option value="">--pilih--</option>
                                    @foreach ($dropdownData['Hari'] as $id => $Hari)
                                        <option value="{{ $id }}">{{ $Hari }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- Kolom 12 -->
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Bulan</label>
                                <select class="form-select" name="Bulan" aria-label="3 select example">
                                    <option value="">--pilih--</option>
                                    @foreach ($dropdownData['Bulan'] as $id => $Bulan)
                                        <option value="{{ $id }}">{{ $Bulan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">KET_PROD</label>
                                <select class="form-select" name="KET_PROD" aria-label="3 select example">
                                    <option value="">--pilih--</option>
                                    @foreach ($dropdownData['KET_PROD'] as $id => $KET_PROD)
                                        <option value="{{ $id }}">{{ $KET_PROD }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="{{ url('/database') }}">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#datepicker", {
            dateFormat: "d/m/Y",
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".form-select").select2({
            tags: true
        });
    </script>

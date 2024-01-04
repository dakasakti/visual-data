@include('layouts.header')
@include('layouts.sidebar')


<div class="container mt-4">
    <div class="d-flex justify-content-center">
        <div class="card shadow mb-4"> 
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Create Data</h4>
            </div>
            <form action="{{ url('/insertdata') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                <!-- ... -->
                @csrf
                <div class="container mt-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <!-- Kolom 1 -->
                            <div class="col-md-6">
                                <label for="datepicker">Choose a Date</label>
                                <input type="text" id="datepicker" name="datepicker" class="form-control flatpickr validate"
                                    placeholder="Select date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="ORG_CODE" class="form-label">ORG_CODE</label>
                                <select class="form-control validate" name="ORG_CODE" aria-label="Size 3 select example"required required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['ORG_CODE'] }}">{{ $item['ORG_CODE'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 2 -->
                            <div class="col-md-6">
                                <label for="NAMA_CUSTOMER" class="form-label">NAMA_CUSTOMER</label>
                                <select class="form-control validate" name="NAMA_CUSTOMER" aria-label="Size 3 select example"requiredrequired>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['NAMA_CUSTOMER'] }}">{{ $item['NAMA_CUSTOMER'] }}
                                        </option>
                                    @endforeach
                            </div>
                            <div class="col-md-6">
                                <label for="KODE_PRODUK" class="form-label">KODE_PRODUK</label>
                                <select class="form-control validate" name="KODE_PRODUK" aria-label="Size 3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['KODE_PRODUK'] }}">{{ $item['KODE_PRODUK'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 3 -->
                            <div class="col-md-6">
                                <label for="AMMOUNT" class="form-label">AMMOUNT</label>
                                <select class="form-control validate" name="AMMOUNT" aria-label="Size 3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['AMMOUNT'] }}">{{ $item['AMMOUNT'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="HARGA_JUAL" class="form-label">HARGA_JUAL</label>
                                <select class="form-control validate" name="HARGA_JUAL" aria-label="Size 3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['HARGA_JUAL'] }}">{{ $item['HARGA_JUAL'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 4 -->
                            <div class="col-md-6">
                                <label for="TRX" class="form-label">TRX</label>
                                <select class="form-control validate" name="TRX" aria-label="Size 3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['TRX'] }}">{{ $item['TRX'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="TYPE_MITRA" class="form-label">TYPE_MITRA</label>
                                <select class="form-control validate" name="TYPE_MITRA" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['TRX'] }}">{{ $item['TRX'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 5 -->
                            <div class="col-md-6">
                                <label for="AMMOUNT_FIX" class="form-label">AMMOUNT_FIX</label>
                                <select class="form-control validate" name="AMMOUNT_FIX" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['AMMOUNT_FIX'] }}">{{ $item['AMMOUNT_FIX'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="PRODUK_FIX" class="form-label">PRODUK_FIX</label>
                                <select class="form-control validate" name="PRODUK_FIX" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['PRODUK_FIX'] }}">{{ $item['PRODUK_FIX'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 6 -->
                            <div class="col-md-6">
                                <label for="BUCKET_NAME" class="form-label">BUCKET_NAME</label>
                                <select class="form-control validate" name="BUCKET_NAME" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['BUCKET_NAME'] }}">{{ $item['BUCKET_NAME'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">Type_Produk
                                <label for="Type_Produk" class="form-label">Type_Produk</label>
                                <select class="form-control validate" name="Type_Produk" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['Type_Produk'] }}">{{ $item['Type_Produk'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 7 -->
                            <div class="col-md-6">
                                <label for="TYPE_BISNIS" class="form-label">TYPE_BISNIS</label>
                                <select class="form-control validate" name="TYPE_BISNIS" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['TYPE_BISNIS'] }}">{{ $item['TYPE_BISNIS'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="REV_INPPN" class="form-label">REV_INPPN</label>
                                <select class="form-control validate" name="REV_INPPN" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['REV_INPPN'] }}">{{ $item['REV_INPPN'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 8 -->
                            <div class="col-md-6">
                                <label for="REV_EXPPN" class="form-label">REV_EXPPN</label>
                                <select class="form-control validate" name="REV_EXPPN" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['REV_EXPPN'] }}">{{ $item['REV_EXPPN'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="PAJAK" class="form-label">PAJAK</label>
                                <select class="form-control validate" name="PAJAK" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['PAJAK'] }}">{{ $item['PAJAK'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 9 -->
                            <div class="col-md-6">
                                <label for="HPP" class="form-label">HPP</label>
                                <select class="form-control validate" name="HPP" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['HPP'] }}">{{ $item['HPP'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="TOTAL_HPP_INPPN" class="form-label">TOTAL_HPP_INPPN</label>
                                <select class="form-control validate" name="TOTAL_HPP_INPPN" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['TOTAL_HPP_INPPN'] }}">{{ $item['TOTAL_HPP_INPPN'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 10 -->
                            <div class="col-md-6">
                                <label for="TOTAL_HPP_EXPPN" class="form-label">TOTAL_HPP_EXPPN</label>
                                <select class="form-control validate" name="TOTAL_HPP_EXPPN" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['TOTAL_HPP_EXPPN'] }}">{{ $item['TOTAL_HPP_EXPPN'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="MARGIN_INPPN" class="form-label">MARGIN_INPPN</label>
                                <select class="form-control validate" name="MARGIN_INPPN" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['MARGIN_INPPN'] }}">{{ $item['MARGIN_INPPN'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 11 -->
                            <div class="col-md-6">
                                <label for="MARGIN_EXPPN" class="form-label">MARGIN_EXPPN</label>
                                <select class="form-control validate" name="MARGIN_EXPPN" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['MARGIN_EXPPN'] }}">{{ $item['MARGIN_EXPPN'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Hari" class="form-label">Hari</label>
                                <select class="form-control validate" name="Hari" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['Hari'] }}">{{ $item['Hari'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Kolom 12 -->
                            <div class="col-md-6">
                                <label for="Bulan" class="form-label">Bulan</label>
                                <select class="form-control validate" name="Bulan" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['Bulan'] }}">{{ $item['Bulan'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="KET_PROD" class="form-label">KET_PROD</label>
                                <select class="form-control validate" name="KET_PROD" aria-label="3 select example"required>
                                    <option value="">--pilih--</option>
                                    @foreach ($orgCodes as $item)
                                        <option value="{{ $item['KET_PROD'] }}">{{ $item['KET_PROD'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Lanjutkan dengan baris formulir lainnya -->

                        <div class="row mt-3">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-danger" href="{{ url('/database') }}"
                                    enctype="multipart/form-data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




@include('layouts.footer')


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    flatpickr("#datepicker", {
        dateFormat: "d/m/Y",
    });

    // $(".form-control.validate").select2({
    //     tags: true
    // });

    $('.form-control.validate').select2({
  ajax: {
    url: 'https://api.github.com/search/repositories',
    dataType: 'json'
  }
});

    function validateForm() {
        var elements = document.getElementsByClassName('validate');
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].value.trim() === '') {
                alert('Please fill in all required fields.');
                return false;
            }
        }
        return true;
    }
</script>


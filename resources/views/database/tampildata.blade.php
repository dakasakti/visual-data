
@include('layouts.header')

{{-- @include('layouts.content') --}}




<div class="container mt-4 ">
    <div class="d-flex justify-content-center">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <a href="{{ url('/database') }}"><h4><i class="fa-solid fa-angle-left"></i></h4>
            </a>

    <div class="text-center">
            <h4 class="m-0 font-weight-bold text-primary ">Create Data</h4>
        </div>
              </div> 
              
                <form action=" /updatedata/{{ $data->id }} " method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="container mt-5">
                    <div class="card">
                    <div class="card-body">
                <div class="row g-2">
                    <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <div class="dates" style="color:#000000;">
                                <input type="text" style="width:200px;background-color:#f9f9f9;" class="form-control" id="usr1" name="Tanggal" autocomplete="off" value="{{ $data->Tanggal }}">
                            </div>      
                    </div>
                    <div class="col mb-2">
                    <label for="exampleInputEmail1"  class="form-label">ORG_CODE</label>
                    <select class="form-select"name="ORG_CODE"aria-label="Size 3 select example">
                        <option selected>{{ $data->ORG_CODE }}</option>
                        <option value="1">703010</option>
                        <option value="2">703011</option>
                        <option value="3">704020</option>
                        <option value="4">705020</option>
                        <option value="5">717004</option>
                        <option value="6">718014</option>
                    </select>             
                    </div>
                    </div>
                    <div class="row g-2">
                    <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">NAMA_CUSTOMER</label>
                                <select class="form-select"name="NAMA_CUSTOMER"aria-label="Size 3 select example">
                                <option selected>{{ $data->NAMA_CUSTOMER  }}</option>
                                <option value="">--pilih--</option>
                                <option value="1">Fliptech Lentera Inspirasi Pertiwi</option>
                                <option value="2">Global Indo Multimedia</option>
                                <option value="3">Ovo</option>
                                <option value="3">PT Akses Solusi Nusantara</option>
                                <option value="3">PT ALFFAR BERKAH MANDIRI CORPORINDO</option>
                                <option value="3">PT Digital Kreasi Telekomunikasi</option>
                                <option value="3">PT EMobile Indonesia</option>
                                <option value="3">PT MARKAZ JALAN BERSAMA</option>
                                <option value="3">PT MEGA KREASI INDOTAMA</option>
                                <option value="3">PT Mitra Distribusi Utama</option>
                                <option value="3">PT MMBC TOUR AND TRAVEL</option>
                                <option value="3">PT SARANA KREASI PERKASA (PLUSLINK)</option>
                                <option value="3">PT Widya Mahardika Raya</option>
                                <option value="3">PT. Berkah Berkat Bersatu</option>
                                <option value="3">Satulink Lintas Indonesia</option>
                                </select>    
                    </div>
                    <div class="col mb-2">
                        <label  class="form-label">KODE_PRODUK</label>
                        <input type="text" class="form-control"name="KODE_PRODUK" id="floatingInput"value="{{ $data->KODE_PRODUK }}" >
                                
                    </div>
                </div>
                <div class="row g-2">
                <div class="col mb-2">
                    <label for= class="form-label">AMMOUNT</label>
                        <input type="number" class="form-control"name="AMMOUNT" id="floatingInput" value="{{ $data->AMMOUNT }}" >
                </div>
                <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">HARGA_JUAL</label>
                    <input type="number" class="form-control"name="HARGA_JUAL" id="floatingInput" value="{{ $data->HARGA_JUAL }}"   >
                </div>
                </div>
                <div class="row g-2">
                <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">TRX</label>
                    <input type="number" class="form-control"name="TRX" id="floatingInput" value="{{ $data->TRX }}"  >
                </div>
                <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">TYPE_MITRA</label>
                    <select class="form-select" name="TYPE_MITRA" aria-label="3 select example" >
                    <option selected>{{ $data->TYPE_MITRA  }}</option>
                    <option value="official">official</option>
                    <option value="server">server</option>
                    <option value="SWITCHING">SWITCHING</option>
                    </select>             
                </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">AMMOUNT_FIX</label>
                            <input type="number" class="form-control"name="AMMOUNT_FIX" id="floatingInput" value="{{ $data->AMMOUNT_FIX }}"   >
                    </div>
                    <div class="col mb-2">
                    <label for="exampleInputEmail1"  class="form-label">PRODUK_FIX</label>
                    <input type="text" class="form-control"name="PRODUK_FIX" id="floatingInput" value="{{ $data->PRODUK_FIX }}"   >
                    </div>
                    </div>
                    <div class="row g-2">
                    <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">BUCKET_NAME</label>
                        <input type="text" class="form-control"name="BUCKET_NAME" id="floatingInput" value="{{ $data->BUCKET_NAME }}"   >
                                
                    </div>
                    <div class="col mb-2">
                        <label  class="form-label">Type_Produk</label>
                        <select class="form-select" name="Type_Produk" aria-label="3 select example" >
                        <option selected>{{ $data->Type_Produk  }}</option>
                        <option value="UNIT">UNIT</option>
                        <option value="SWITCHING">SWITCHING</option>
                        <option value="PPOB">PPOB</option>
                        <option value="BULK">BULK</option>

                        </select>                      
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">TYPE_BISNIS</label>
                    <select class="form-select" name="TYPE_BISNIS" aria-label="3 select example"  >
                    <option selected>{{ $data->TYPE_BISNIS  }}</option>
                    <option value="MOCAN">MOCAN</option>
                    <option value="SWITCHING">SWITCHING</option>
                    </select>   
                </div>
                <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">REV_INPPN</label>
                    <input type="number" class="form-control"name="REV_INPPN" id="floatingInput" value="{{ $data->REV_INPPN }}"  >
                </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">REV_EXPPN</label>
                    <input type="number" class="form-control"name="REV_EXPPN" id="floatingInput" value="{{ $data->REV_EXPPN }}" >
                </div>
                <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">PAJAK</label>
                    <input type="text" class="form-control"name="PAJAK" id="floatingInput" value="{{ $data->PAJAK }}" >
                </div>
                </div>

                <div class="row g-2">
                <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">HPP</label>
                    <input type="number" class="form-control"name="HPP" id="floatingInput" value="{{ $data->HPP }}" >
                </div>
                <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">TOTAL_HPP_INPPN</label>
                    <input type="number" class="form-control"name="TOTAL_HPP_INPPN" id="floatingInput" value="{{ $data->TOTAL_HPP_INPPN }}" >
                </div>
                </div>

                <div class="row g-2">
                    <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">TOTAL_HPP_EXPPN</label>
                    <input type="number" class="form-control"name="TOTAL_HPP_EXPPN" id="floatingInput" value="{{ $data->TOTAL_HPP_EXPPN }}"  >
                    </div>
                    <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">Margin_INPPN</label>
                        <input type="number" class="form-control"name="Margin_INPPN" id="floatingInput" value="{{ $data->Margin_INPPN }}"  >
                    </div>
                    </div>
                    <div class="row g-2">
                    <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">Margin_INPPN</label>
                        <input type="number" class="form-control"name="Margin_INPPN" id="floatingInput" value="{{ $data->Margin_INPPN }}"  >
                    </div>
                    <div class="col mb-2">
                            <label for="exampleInputEmail1" class="form-label">Hari</label>
                        <input type="text" class="form-control"name="Hari" id="floatingInput" value="{{ $data->Hari }}"  >
                    </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Bulan</label>
                        <input type="number" class="form-control"name="Bulan" id="floatingInput" value="{{ $data->Bulan }}"  >
                        </div>
                        <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">KET_PROD</label>
                        <input type="text" class="form-control"name="Hari" id="floatingInput" value="{{ $data->KET_PROD }}"  >
                    </div>
                    </div>
                        
                    
                <div class="row g-2">
                    <a class="btn btn-danger" href="{{ url('/database') }}" enctype="multipart/form-data">Back</a>      
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>




                <script>

                    $(function() {

                    $('.dates #usr1').datepicker({
                    'format': 'yyyy-mm-dd',
                    'autoclose': true
                    });


                });
                    </script>

                </form>

                        </div>
                    </div>

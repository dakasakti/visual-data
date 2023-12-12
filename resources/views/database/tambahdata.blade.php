@include('layouts.header')

@include('layouts.sidebar')

    <div class="container mt-4 ">
        <div class="d-flex justify-content-center">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary ">Create Data</h4>
                  </div> 
            <form action="{{ url('/insertdata') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="justify-content-center">
            <div class="container mt-5">
                <div class="card">
                <div class="card-body">
            <div class="row g-2">
                <div class="col mb-2">
                    <label for="datepicker">Choose a Date</label>
                    <input type="text" id="datepicker" name="datepicker" class="form-control flatpickr" placeholder="Select date">
                </div> 
                <div class="col mb-2">
                <label for="ORG_CODE"  class="form-label">ORG_CODE</label>
                <select class="form-select"name="ORG_CODE"aria-label="Size 3 select example">
                    <option value="">--pilih--</option>
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
                    <label for="NAMA_CUSTOMER" class="form-label">NAMA_CUSTOMER</label>
                            <select class="form-select"name="NAMA_CUSTOMER"aria-label="Size 3 select example">
                            {{-- <option selected="{{ $item->NAMA_CUSTOMER  }}"></option> --}}
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
                    <input type="text" class="form-control"name="KODE_PRODUK" id="floatingInput" >
                            
                </div>
            </div>
            <div class="row g-2">
            <div class="col mb-2">
                <label for= class="form-label">AMMOUNT</label>
                    <input type="number" class="form-control"name="AMMOUNT" id="floatingInput" >
            </div>
            <div class="col mb-2">
                <label for="exampleInputEmail1" class="form-label">HARGA_JUAL</label>
                <input type="number" class="form-control"name="HARGA_JUAL" id="floatingInput"   >
            </div>
            </div>
            <div class="row g-2">
            <div class="col mb-2">
                <label for="exampleInputEmail1" class="form-label">TRX</label>
                <input type="number" class="form-control"name="TRX" id="floatingInput"  >
            </div>
            <div class="col mb-2">
                <label for="exampleInputEmail1" class="form-label">TYPE_MITRA</label>
                <select class="form-select" name="TYPE_MITRA" aria-label="3 select example" >
                <option value="">--pilih--</option>
                <option value="official">official</option>
                <option value="server">server</option>
                <option value="SWITCHING">SWITCHING</option>
                </select>             
            </div>
            </div>
            <div class="row g-2">
                <div class="col mb-2">
                <label for="exampleInputEmail1" class="form-label">AMMOUNT_FIX</label>
                        <input type="number" class="form-control"name="AMMOUNT_FIX" id="floatingInput"   >
                </div>
                <div class="col mb-2">
                <label for="exampleInputEmail1"  class="form-label">PRODUK_FIX</label>
                <input type="text" class="form-control"name="PRODUK_FIX" id="floatingInput"   >
                </div>
                </div>
                <div class="row g-2">
                <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">BUCKET_NAME</label>
                    <input type="text" class="form-control"name="BUCKET_NAME" id="floatingInput"   >
                            
                </div>
                <div class="col mb-2">
                    <label  class="form-label">Type_Produk</label>
                    <select class="form-select" name="Type_Produk" aria-label="3 select example" >
                    <option value="">--pilih--</option>
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
                <select class="form-select" name="TYPE_BISNIS" aria-label="3 select example" >
                <option value="">--pilih--</option>
                <option value="MOCAN">MOCAN</option>
                <option value="SWITCHING">SWITCHING</option>
                </select>   
            </div>
            <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">REV_INPPN</label>
                <input type="number" class="form-control"name="REV_INPPN" id="floatingInput"  >
            </div>
            </div>
            <div class="row g-2">
                <div class="col mb-2">
                <label for="exampleInputEmail1" class="form-label">REV_EXPPN</label>
                <input type="number" class="form-control"name="REV_EXPPN" id="floatingInput" >
            </div>
            <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">PAJAK</label>
                <input type="text" class="form-control"name="PAJAK" id="floatingInput" >
            </div>
            </div>

            <div class="row g-2">
            <div class="col mb-2">
                <label for="exampleInputEmail1" class="form-label">HPP</label>
                <input type="number" class="form-control"name="HPP" id="floatingInput" >
            </div>
            <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">TOTAL_HPP_INPPN</label>
                <input type="number" class="form-control"name="TOTAL_HPP_INPPN" id="floatingInput" >
            </div>
            </div>

            <div class="row g-2">
                <div class="col mb-2">
                <label for="exampleInputEmail1" class="form-label">TOTAL_HPP_EXPPN</label>
                <input type="number" class="form-control"name="TOTAL_HPP_EXPPN" id="floatingInput"  >
                </div>
                <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">MARGIN_INPPN</label>
                    <input type="number" class="form-control"name="MARGIN_INPPN" id="floatingInput"  >
                </div>
                </div>
                <div class="row g-2">
                <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">MARGIN_EXPPN</label>
                    <input type="number" class="form-control"name="MARGIN_EXPPN" id="floatingInput"  >
                </div>
                <div class="col mb-2">
                        <label for="exampleInputEmail1" class="form-label">Hari</label>
                    <input type="text" class="form-control"name="Hari" id="floatingInput"  >
                </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-2 ">
                    <label for="exampleInputEmail1" class="form-label">Bulan</label>
                    <input type="number" class="form-control"name="Bulan" id="floatingInput" >
                    </div>
                    <div class="col mb-2">
                    <label for="exampleInputEmail1" class="form-label">KET_PROD</label>
                    <input type="text" class="form-control"name="KET_PROD" id="floatingInput"  >
                </div>
                </div>
                    
                
            <div class="row g-2">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-danger" href="{{ url('/database') }}" enctype="multipart/form-data">Back</a>      
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            @include('layouts.footer')

            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <script>
                flatpickr("#datepicker", {
                    dateFormat: "d/m/Y", // Atur format tanggal sesuai kebutuhan
                });
            </script>


            </div>
         </div>
       </div>
     </div>
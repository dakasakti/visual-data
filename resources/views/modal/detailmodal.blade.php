<style>
    .scroll{
        height: 770px;
        overflow: scroll;
    }
    .modal-backdrop{
        background-color: rgba(54, 54, 54, 0.1) !important; 
    }
</style>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 d-flex mt-3 d-flex">View Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="scroll">
            <div class="modal-body table-responsive " id="modal-detail-content">
                <div class="row justify-content-center">
                    <div class="container-fluid">
                        <table class="table table-bordered no-margin">
                            <tr>
                                <td>No</td>
                                <td><span id="id"></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td><span id="tanggal"></td>
                            </tr>
                            <tr>
                                <td>ORG_CODE</td>
                                <td><span id="org"></td>
                            </tr>
                            <tr>
                                <td>NAMA_CUSTOMER</td>
                                <td><span id="nama"></td>
                            </tr>
                            <tr>
                                <td>KODE_PRODUK</td>
                                <td><span id="kode"></td>
                            </tr>
                            <tr>
                                <td>AMMOUNT</td>
                                <td><span id="ammount"></td>
                            </tr>
                            <tr>
                                <td>HARGA_JUAL</td>
                                <td><span id="harga"></td>
                            </tr>
                            <tr>
                                <td>TRX</td>
                                <td><span id="trx"></td>
                            </tr>
                            <tr>
                                <td>TYPE_MITRA</td>
                                <td><span id="typem"></td>
                            </tr>
                            <tr>
                                <td>AMMOUNT_FIX</td>
                                <td><span id="ammountf"></td>
                            </tr>
                            <tr>
                                <td>PRODUK_FIX</td>
                                <td><span id="produk"></td>
                            </tr>
                            <tr>
                                <td>BUCKET_NAME</td>
                                <td><span id="bucket"></td>
                            </tr>
                            <tr>
                                <td>Type_Produk</td>
                                <td><span id="typep"></td>
                            </tr>
                            <tr>
                                <td>TYPE_BISNIS</td>
                                <td><span id="typeb"></td>
                            </tr>
                            <tr>
                                <td>REV_INPPN</td>
                                <td><span id="revin"></td>
                            </tr>
                            <tr>
                                <td>PAJAK</td>
                                <td><span id="pajak"></td>
                            </tr>
                            <tr>
                                <td>REV_EXPPN</td>
                                <td><span id="revex"></td>
                            </tr>
                            <tr>
                                <td>HPP</td>
                                <td><span id="hpp"></td>
                            </tr>
                            <tr>
                                <td>TOTAL_HPP_INPPN</td>
                                <td><span id="thi"></td>
                            </tr>
                            <tr>
                                <td>TOTAL_HPP_EXPPN</td>
                                <td><span id="the"></td>
                            </tr>
                            <tr>
                                <td>MARGIN_INPPN</td>
                                <td><span id="margini"></td>
                            </tr>
                            <tr>
                                <td>MARGIN_EXPPN</td>
                                <td><span id="margine"></td>
                            </tr>
                            <tr>
                                <td>Hari</td>
                                <td><span id="hari"></td>
                            </tr>
                            <tr>
                                <td>Bulan</td>
                                <td><span id="bulan"></td>
                            </tr>
                            <tr>
                                <td>KETPROD</td>
                                <td><span id="ketprod"></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>


                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="..."></script>

                <!--var itu bikin sendiri (bebas), text ngikutin isi val/text,kalo .data isi sesuai yang udah dibuat di tombolnya misal (data-id), id# dipake buat manggil di tdnya -->
               
                <script>
                    $(document).ready(function() {
                        $(document).on('click', '.view-detail', function() {
                            var id = $(this).data('id');
                            var Tanggal = $(this).data('tanggal');
                            var org = $(this).data('org');
                            var nama = $(this).data('nama');
                            var kode = $(this).data('kode');
                            var ammount = $(this).data('ammount');
                            var harga = $(this).data('harga');
                            var trx = $(this).data('trx');
                            var typem = $(this).data('typem');
                            var ammountf = $(this).data('ammountf');
                            var produk = $(this).data('produk');
                            var bucket = $(this).data('bucket');
                            var typep = $(this).data('typep');
                            var typeb = $(this).data('typeb');
                            var revin = $(this).data('revin');
                            var pajak = $(this).data('pajak');
                            var revex = $(this).data('revex');
                            var hpp = $(this).data('hpp');
                            var thi = $(this).data('thi');
                            var the = $(this).data('the');
                            var margini = $(this).data('margini');
                            var margine = $(this).data('margine');
                            var hari = $(this).data('hari');
                            var bulan = $(this).data('bulan');
                            var ketprod = $(this).data('ketprod');

                            $('#id').text(id);
                            $('#tanggal').text(Tanggal);
                            $('#org').text(org);
                            $('#nama').text(nama);
                            $('#kode').text(kode);
                            $('#ammount').text(ammount);
                            $('#harga').text(harga);
                            $('#trx').text(trx);
                            $('#typem').text(typem);
                            $('#ammountf').text(ammountf);
                            $('#produk').text(produk);
                            $('#bucket').text(bucket);
                            $('#typep').text(typep);
                            $('#typeb').text(typeb);
                            $('#revin').text(revin);
                            $('#pajak').text(pajak);
                            $('#revex').text(revex);
                            $('#hpp').text(hpp);
                            $('#thi').text(thi);
                            $('#the').text(the);
                            $('#margini').text(margini);
                            $('#margine').text(margine);
                            $('#hari').text(hari);
                            $('#bulan').text(bulan);
                            $('#ketprod').text(ketprod);
                        });
                    });
                </script>

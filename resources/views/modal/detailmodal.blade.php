<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 d-flex mt-3 text-center">View Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body " id="modal-detail-content">
                <div class="row justify-content-center">
                    <div class="container-fluid">
                    <table class="table table-striped">
                        <tr>
                            <td>No</td>
                            <td>: {{ $item->id }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>: {{ \Carbon\Carbon::parse($item->Tanggal)->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <td>ORG CODE</td>
                            <td>: {{ $item->ORG_CODE }}</td>
                        </tr>
                        <tr>
                            <td>NAMA CUSTOMER</td>
                            <td>: {{ $item->NAMA_CUSTOMER }}</td>
                        </tr>
                        <tr>
                            <td>KODE PRODUK</td>
                            <td>: {{ $item->KODE_PRODUK }}</td>
                        </tr>
                        <tr>
                            <td>AMMOUNT</td>
                            <td>: {{ $item->AMMOUNT }}</td>
                        </tr>
                        <tr>
                            <td>HARGA JUAL</td>
                            <td>: {{ $item->HARGA_JUAL }}</td>
                        </tr>
                        <tr>
                            <td>TRX</td>
                            <td>: {{ $item->TRX }}</td>
                        </tr>
                        <tr>
                            <td>TYPE MITRA</td>
                            <td>: {{ $item->TYPE_MITRA }}</td>
                        </tr>
                        <tr>
                            <td>AMMOUNT FIX</td>
                            <td>: {{ $item->AMMOUNT_FIX }}</td>
                        </tr>
                        <tr>
                            <td>PRODUK FIX</td>
                            <td>: {{ $item->PRODUK_FIX }}</td>
                        </tr>
                        <tr>
                            <td>BUCKET NAME</td>
                            <td>: {{ $item->BUCKET_NAME }}</td>
                        </tr>
                        <tr>
                            <td>Type Produk</td>
                            <td>: {{ $item->Type_Produk }}</td>
                        </tr>
                        <tr>
                            <td>TYPE BISNIS</td>
                            <td>: {{ $item->TYPE_BISNIS }}</td>
                        </tr>
                        <tr>
                            <td>REV INPPN</td>
                            <td>: {{ $item->REV_INPPN }}</td>
                        </tr>
                        <tr>
                            <td>PAJAK</td>
                            <td>: {{ $item->PAJAK }}</td>
                        </tr>
                        <tr>
                            <td>REV EXPPN</td>
                            <td>: {{ $item->REV_EXPPN }}</td>
                        </tr>
                        <tr>
                            <td>HPP</td>
                            <td>: {{ $item->HPP }}</td>
                        </tr>
                        <tr>
                            <td>TOTAL HPP INPPN</td>
                            <td>: {{ $item->TOTAL_HPP_INPPN }}</td>
                        </tr>
                        <tr>
                            <td>TOTAL HPP EXPPN</td>
                            <td>: {{ $item->TOTAL_HPP_EXPPN }}</td>
                        </tr>
                        <tr>
                            <td>Margin INPPN</td>
                            <td>: {{ $item->Margin_INPPN }}</td>
                        </tr>
                        <tr>
                            <td>Margin EXPPN</td>
                            <td>: {{ $item->Margin_EXPPN }}</td>
                        </tr>
                        <tr>
                            <td>Hari</td>
                            <td>: {{ $item->Hari }}</td>
                        </tr>
                        <tr>
                            <td>Bulan</td>
                            <td>: {{ $item->Bulan }}</td>
                        </tr>
                        <tr>
                            <td>KET PROD</td>
                            <td>: {{ $item->KET_PROD }}</td>
                        </tr>
                    </table>
                </div>
            </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="..."></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="..."></script>
<script>
    $('.view-detail').on('click', function (event) {
        var button = $(this);
        var itemId = button.data('item-id');
        var modalContent = $('#modal-detail-content');

        var url = 'modal/detailmodal' + itemId;

        modalContent.load(url, function () {
            $('#modal-detail').modal('show');
        });
    });
</script>
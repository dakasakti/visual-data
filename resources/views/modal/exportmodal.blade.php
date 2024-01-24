<div class="modal fade" id="exportmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exportmodal">Export Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/database-export" method="get" >
                    <!-- Dropdown buat filter nama customer -->
                    <div class="form-group ">
                        <label for="filter" class="filter_export">Nama customer :</label>
                        @if (isset($dropdown['NAMA_CUSTOMER']))
                            <select class="form-select" name="filter_export" id="NAMA_CUSTOMER"
                                aria-label="Size 3 select example" required value="{{ old('filter_export') }}">
                                <optgroup label="Nama customer yang akan di filter">
                                    @foreach ($dropdown['NAMA_CUSTOMER'] as $id => $NAMA_CUSTOMER)
                                        <option value="{{ $id }}">{{ $NAMA_CUSTOMER }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        @endif
                    </div>

                    <!-- Dropdown buat milih jenis ekspor -->
                    <div class="form-group ">
                        <label for="export_type" class="export_type">Tipe Export:</label>
                        <select class="form-select" name="export_type" aria-label="Size 3 select example" required
                            value="{{ old('export_type') }}">
                            <option value="semua">Semua Kolom</option>
                            <option value="summary">Summary</option>
                        </select>
                    </div>
                    <div class="float-right mt-4">
                        <button type="submit" class="btn btn-primary">Export</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

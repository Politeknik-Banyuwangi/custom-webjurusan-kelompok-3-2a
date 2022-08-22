<div class="modal fade text-left" id="cooperationFieldModal" tabindex="-1" role="dialog"
    aria-labelledby="cooperationFieldModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="cooperationFieldModal">Tambah Bidang Kerjasama</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="cooperationFieldForm" action="{{ route('cooperation-fields.store') }}" method="POST"
                data-request="ajax" data-success-callback="{{ route('cooperation-fields') }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Bidang Kerjasama <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Nama Bidang Kerjasama" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary waves-effect waves-light" type="submit"><i
                            class="feather icon-send"></i>
                        Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

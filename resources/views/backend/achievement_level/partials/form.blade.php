<div class="modal fade text-left" id="achievementLevelModal" tabindex="-1" role="dialog"
    aria-labelledby="achievementLevelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="achievementLevelModal">Tambah Tingkat Prestasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="achievementLevelForm" action="{{ route('achievement-levels.store') }}" method="POST"
                data-request="ajax" data-success-callback="{{ route('achievement-levels') }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Tingkat Prestasi <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Nama Tingkat Prestasi" autocomplete="off">
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

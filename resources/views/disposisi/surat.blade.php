<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">Asal Surat</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="asal_surat" class="form-control" value="{{ $surat->asal_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">No Surat</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="name" class="form-control" value="{{ $surat->no_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_surat" class="col-sm-3 control-label">Tanggal Surat</label>
                <div class="col-sm-10">
                    <input type="tanggal_surat" name="name" class="form-control" value="{{ $surat->tanggal_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" name="keterangan" class="form-control" value="{{ $surat->keterangan ?? '' }}" disabled>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">Prihal</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="name" class="form-control" value="{{ $surat->prihal ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <p class="text">{{$surat->keterangan}}</p>
                </div>
            </div>
            <div class="form-group">
                <label for="prihal" class="col-sm-2 control-label">File</label>
                <div class="col-sm-10">
                    <a href="/surat_storage/{{ $surat->file }}" target="_blank">{{$surat->file}}</a>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_surat" class="col-sm-5 control-label">Tanggal Terima Surat</label>
                <div class="col-sm-10">
                    <input type="tanggal_surat" name="name" class="form-control" value="{{ $surat->tanggal_terima_surat ?? '' }}" disabled>
                </div>
            </div>
        </div>
    </div>
</div>

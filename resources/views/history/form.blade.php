{{ csrf_field() }}
<div class="container">
    <div class="row">
        <div class="col">
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
                <label for="keterangan" class="col-sm-5 control-label">Tanggal Surat Masuk</label>
                <div class="col-sm-10">
                    <input type="text" name="tanggal_surat_masuk" class="form-control" value="{{ $surat->tanggal_terima_surat ?? '' }}" disabled>
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
                    <p class="text">{{$surat->keterangan ?? ''}}</p>
                </div>
            </div>
            <div class="form-group">
                <label for="prihal" class="col-sm-2 control-label">File</label>
                <div class="col-sm-10">
                    <a href="/surat_storage/{{ $surat->file ?? ''}}" target="_blank">{{$surat->file ?? ''}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
      <input type="text"
        class="form-control" name="user" value="{{$user}}" hidden id="" aria-describedby="helpId" placeholder="">
    </div>
    @include('disposisi.switch')
    <div class="form-group">
        <label for="">Disposisi</label>
          <div class="col-sm-11">
              <textarea class="form-control" name="disposisi" id="" rows="3">{{$disposisi ?? ''}}</textarea>
          </div>
      </div>

    <div class="form-group">
        <div class="col-sm-11">
      <label for="">Kajian</label>
        <div class="col-sm-11">
            <textarea class="form-control" name="kajian" id="" rows="3">{{$kajian ?? ''}}</textarea>
        </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">File Pendukung</label>
        <input type="file" class="form-control-file" name="file_disposisi" id="" placeholder="" aria-describedby="fileHelpId">
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        </div>
    </div>
</div>
</div>


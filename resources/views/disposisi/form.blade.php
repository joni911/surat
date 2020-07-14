{{ csrf_field() }}
<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">No Surat</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="name" class="form-control" value="{{ $no_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_surat" class="col-sm-3 control-label">Tanggal Surat</label>
                <div class="col-sm-10">
                    <input type="tanggal_surat" name="name" class="form-control" value="{{ $tanggal_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" name="keterangan" class="form-control" value="{{ $keterangan ?? '' }}" disabled>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">Prihal</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="name" class="form-control" value="{{ $prihal ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <p class="text">{{$keterangan}}</p>
                </div>
            </div>
            <div class="form-group">
                <label for="prihal" class="col-sm-2 control-label">File</label>
                <div class="col-sm-10">
                    <a href="/surat_storage/{{ $file }}" target="_blank">{{$file}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-group">
      <input type="text"
        class="form-control" name="user" value="{{$data->name}}" hidden id="" aria-describedby="helpId" placeholder="">
    </div>
    @include('disposisi.switch')
    <div class="form-group">
      <label for="">Kajian</label>
        <div class="col-sm-11">
            <textarea class="form-control" name="kajian" id="" rows="3"></textarea>
        </div>
    </div>
</div>
<p>{{$created_at}}</p>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="/reset/{{ $id }}" class="btn btn-primary" role="button">Reset Password</a>
    </div>
</div>


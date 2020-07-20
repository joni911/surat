{{ csrf_field() }}
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label for="">Kode Surat</label>
                <input type="text"
                  class="form-control" name="kode_surat" id="" aria-describedby="helpId" placeholder="" value="{{$kode_surat ?? ''}}">
                <small id="helpId" class="form-text text-muted">Berupa 3 hurf atau angka maksimal</small>
              </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text"
                class="form-control" name="keterangan" id="" aria-describedby="helpId" placeholder="" value="{{$keterangan ?? ''}}">
            <small id="helpId" class="form-text text-muted">maksimal 32 karakter</small>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('suratcode.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>


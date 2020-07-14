{{ csrf_field() }}
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">No Surat</label>
    <div class="col-sm-10">
        <input type="text" name="no_surat" class="form-control">
    </div>
</div>
@include('surat.switch')
  <div class="form-group">
    <label for="">Prihal</label>
    <div class="col-sm-10">
        <input type="text"
      class="form-control" name="prihal" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="">Tanggal Masuk</label>
    <div class="col-sm-10">
      <input type="date"
      class="form-control" name="tanggal_masuk" id="" aria-describedby="helpId" placeholder="">
    </div>
<div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-10">
        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
</div>
</div>
<div class="form-group">
  <label for="">File Surat</label>
  <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('surat.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>


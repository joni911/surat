{{ csrf_field() }}
<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label for="">Tujuan</label>
                <select class="form-control" name="tujuan" id="">
                     @foreach ($x as $x)
                        <option value="{{$x->jabatan_tujuan}}">{{$x->jabatan_tujuan}}</option>
                     @endforeach
                </select>
              </div>

        </div>
        <div class="col-sm-5">
            <div class="form-group">
              <label for="">Kode Surat</label>
              <select class="form-control" name="no_surat" id="">
                @foreach ($kode as $k)
                     <option value="{{$k->kode_surat}}">{{$k->kode_surat}} {{$k->keterangan}}</option>
                @endforeach
              </select>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="">Asal Surat</label>
    <div class="col-sm-10">
        <input type="text"
      class="form-control" name="asal_surat" value="{{$asal_surat}}" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="">No Surat</label>
    <div class="col-sm-10">
        <input type="text"
      class="form-control" name="nomor_asli_surat" value="{{$no_asal_surat}}" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="">Prihal</label>
    <div class="col-sm-10">
        <input type="text"
      class="form-control" name="prihal" value="{{$prihal}}" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="">Tanggal Surat</label>
    <div class="col-sm-10">
      <input type="date"
      class="form-control" name="tanggal_surat" value="{{$tanggal_surat}}" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="">Tanggal Terima Surat</label>
    <div class="col-sm-10">
      <input type="date"
      class="form-control" name="tanggal_terima_surat" value="{{$tanggal_terima_surat}}" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>
<div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-10">
        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10">{{$keterangan}}</textarea>
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


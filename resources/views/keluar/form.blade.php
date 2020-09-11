{{ csrf_field() }}
<div class="container">
    <div class="row">
        <div class="col-sm-5">
            @include('keluar.tujuan')
        </div>
        <div class="col-sm-5">
            <div class="form-group">
              <label for="">Kode Surat</label>
              @if ($no_surat ?? '' !=null)
                  <input type="text"
                    class="form-control" name="no_surat" value="{{$no_surat ?? ''}}" disabled id="" aria-describedby="helpId" placeholder="">
              @else
              <select class="form-control" name="no_surat" id="">
                @foreach ($kode as $k)
                     <option value="{{$k->kode_surat}}">{{$k->kode_surat}} {{$k->keterangan}}</option>
                @endforeach
              </select>
              @endif
            </div>
        </div>
    </div>
</div>
  <div class="form-group">
    <label for="">Prihal</label>
    <div class="col-sm-10">
        <input type="text"
      class="form-control" value="{{$prihal ?? ''}}" name="prihal" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="">Tanggal Surat</label>
    <div class="col-sm-10">
      <input type="date"
      class="form-control" value="{{$tanggal_surat ?? ''}}" name="tanggal_surat" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>
  test
<div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-10">
        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10">{{$keterangan ?? ''}}</textarea>
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


{{ csrf_field() }}
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">No Surat</label>
    <div class="col-sm-10">
        <input type="text" name="no_surat" class="form-control">
    </div>
</div>
<div class="form-group">
        @switch($data->jabatan->jabatan)
            @case('TURT')
                <div class="form-group">
                  <label for="">Tujuan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="tujuan" id="">
                            <option>IT</option>
                            <option>Kasubag UMUM</option>
                            <option>Kasubag Oprasional</option>
                            <option>Sekpri Dirut</option>
                            <option>Dirut</option>
                          </select>
                    </div>
                </div>
                @break
            @case('IT')
            <div class="form-group">
                <label for="">Tujuan</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="tujuan" id="">
                          <option>Kasubag UMUM</option>
                          <option>Kasubag Oprasional</option>
                        </select>
                  </div>
              </div>
                @break
            @case('Kasubag UMUM')
            <div class="form-group">
                <label for="">Tujuan</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="tujuan" id="">
                          <option>Kasubag UMUM</option>
                          <option>Kasubag Oprasional</option>
                          <option>Sekpri Dirut</option>
                          <option>Dirut</option>
                        </select>
                  </div>
              </div>
            @break
            @case('Kasubag Oprasional')
            <div class="form-group">
                <label for="">Tujuan</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="tujuan" id="">
                          <option>Sekpri Dirut</option>
                          <option>Dirut</option>
                        </select>
                  </div>
              </div>
            @break
            @case('Sekpri Dirut')
            <div class="form-group">
                <label for="">Tujuan</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="tujuan" id="">
                          <option>Dirut</option>
                        </select>
                  </div>
              </div>
            @break
            @case('Dirut')
            <div class="form-group">
                <label for="">Tujuan</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="tujuan" id="">
                          <option>TURT</option>
                        </select>
                  </div>
              </div>
            @break
            @default
            <p>Kontak it akun anda belum memiliki ijin mengakses menu ini</p>
        @endswitch
  </div>
  <div class="form-group">
    <label for="">Prihal</label>
    <div class="col-sm-10">
        <input type="text"
      class="form-control" name="prihal" id="" aria-describedby="helpId" placeholder="">
    </div>
  </div>

<div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-10">
        <input type="text" name="keterangan" class="form-control" value="{{ $email ?? '' }}">
    </div>
</div>
<div class="form-group">
  <label for="">Tanggal Masuk</label>
  <div class="col-sm-10">
    <input type="date"
    class="form-control" name="tanggal_masuk" id="" aria-describedby="helpId" placeholder="">
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


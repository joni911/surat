<div class="form-group">
    @switch($tampil->jabatan->jabatan)
        @case('TURT')
            <div class="form-group">
              <label for="">Tujuan</label>
                <div class="col-sm-11">
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
              <div class="col-sm-11">
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
              <div class="col-sm-11">
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
              <div class="col-sm-11">
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
              <div class="col-sm-11">
                  <select class="form-control" name="tujuan" id="">
                      <option>Dirut</option>
                    </select>
              </div>
          </div>
        @break
        @case('Dirut')
        <div class="form-group">
            <label for="">Tujuan</label>
              <div class="col-sm-11">
                  <select class="form-control" name="tujuan" id="">
                      <option>TURT</option>
                    </select>
              </div>
          </div>
        @break
        @default
        <p>Kontak it akun anda belum memiliki ijin mengakses menu ini {{$tampil->jabatan->jabatan}}</p>
    @endswitch
</div>

{{ csrf_field() }}
<div class="form-group">
  <label for="">User</label>
  <div class="col-sm-10">
  <select class="form-control" name="user_id" id="">

    @foreach ($data as $item)
        <option value="{{ $item->id}}">{{ $item->name }}</option>

    @endforeach
  </select>
</div>
</div>
<div class="form-group">
  <label for="">Jabatan</label>
    <div class="col-sm-10">
        <select class="form-control" name="jabatan" id="">
            <option >TURT</option>
            <option >IT</option>
            <option >Kasubag Umum</option>
            <option >Kasubag Oprasional</option>
            <option >Sekpri Dirut</option>
            <option >Dirut</option>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('jabatan.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>


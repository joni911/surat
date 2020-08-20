{{ csrf_field() }}
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
  <label for="">Jabatan</label>
  <input type="text"
    class="form-control" name="jabatan" id="" aria-describedby="helpId" placeholder="" value="{{$data->jabatan ?? ''}}">
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('jabatan.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>


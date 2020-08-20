{{ csrf_field() }}
@include('tujuan.jabatan')
<div class="form-group">
  <input type="text"
class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" value="{{$id ?? ''}}" hidden>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('tujuan.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>


{{-- <div class="form-group">
  <label for="">Tujuan</label>
  <select class="form-control" name="tujuan" id="">
        @foreach ($tujuan as $t)
           <option value="{{$t->jabatan_tujuan}}">{{$t->jabatan_tujuan}}</option>
        @endforeach
  </select>
</div> --}}
<div class="form-group">
  <label for="">Tujuan</label>
  <input type="text"
    class="form-control" name="tujuan" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="form-group">
    <label for="">Tujuan</label>
    <select class="form-control" name="tujuan" id="">
          @foreach ($list as $t)
             <option value="{{$t->jabatan_tujuan}}">{{$t->jabatan_tujuan}}</option>
          @endforeach
    </select>
  </div>

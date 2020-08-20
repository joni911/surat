<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <label for="">Jabatan</label>
        <select class="form-control" name="jabatan" id="">
            <option value="">Pilih Jabatan</option>
            @foreach ($jabatan ?? '' as $item)
                <option value="{{$item->jabatan}}">{{$item->jabatan}}</option>
            @endforeach
        </select>
    </div>
</div>

{{ csrf_field() }}
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" value="{{ $name ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="email" name="email" class="form-control" value="{{ $email ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nomor Whatsapp</label>
    <div class="col-sm-10">
        <input type="text" name="no_wa" class="form-control" value="{{ $no_wa ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="">Akses</label>
    <div class="col-sm-10">
        <select class="form-control" name="hak_akses" id="">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="administrator">Super Admin</option>

          </select>
    </div>
</div>
@include('user.jabatan')
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 text-center">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
    </div>
</div>


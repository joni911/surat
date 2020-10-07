{{ csrf_field() }}
<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">Asal Surat</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="asal_surat" class="form-control" value="{{ $data->asal_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">No Surat</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="name" class="form-control" value="{{ $data->no_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_surat" class="col-sm-3 control-label">Tanggal Surat</label>
                <div class="col-sm-10">
                    <input type="tanggal_surat" name="name" class="form-control" value="{{ $data->tanggal_surat ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan ?? '' }}" disabled>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="no_surat" class="col-sm-2 control-label">Prihal</label>
                <div class="col-sm-10">
                    <input type="no_surat" name="name" class="form-control" value="{{ $data->prihal ?? '' }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <p class="text">{{$data->keterangan}}</p>
                </div>
            </div>
            <div class="form-group">
                <label for="prihal" class="col-sm-2 control-label">File</label>
                <div class="col-sm-10">
                    <a href="/surat_storage/{{ $data->file }}" target="_blank">{{$data->file}}</a>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_surat" class="col-sm-5 control-label">Tanggal Terima Surat</label>
                <div class="col-sm-10">
                    <input type="tanggal_surat" name="name" class="form-control" value="{{ $data->tanggal_terima_surat ?? '' }}" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-center">
         <h2>Daftar Penerima</h2>
    </div>
    <table class="table">
        <thead>
            <tr>

                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($bagikan->bagikan_detail != null)
            @foreach ($bagikan->bagikan_detail as $b)
            <tr>

                <td>{{$b->user->name}}</td>
                <td>{{$b->user->jabatan->jabatan}}</td>
                <td>
                    <a name="" id="" class="btn btn-success" href="/bagikan/{{$b->id}}/edit" role="button">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a class="btn btn-danger" onclick="hapus('{{ $b->id }}')" href="#">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @else
               
            @endif



        </tbody>
    </table>
 </div>
<div class="container">
   <div class="text-center">
        <h2>Daftar Pegawai</h2>
   </div>
</div>
<div class="form-group">
  <label for=""></label>
  <select multiple class="form-control" name="user_id" id="">
      @foreach ($user as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach

  </select>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="tambah" value="Tambah">
    </div>
</div>
@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)
@section('js')
@if (session('success'))
<script type="text/javascript">
    Swal.fire(
        'Sukses!',
        '{{ session('
        success ') }}',
        'success'
    )

</script>
@endif
<script type="text/javascript">
    function hapus(id) {
        Swal.fire({
            title: 'Konfirmasi',
            text: "Yakin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#dd3333',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.value) {
                39
                $.ajax({
                    url: "/bagikan/" + id,
                    type: 'DELETE',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr("content"),
                    },
                    success: function (result) {
                        Swal.fire(
                            'Sukses!',
                            'Berhasil Hapus',
                            'success'
                        );
                        location.reload();
                    }
                });
            }
        })
    }

</script>
@stop

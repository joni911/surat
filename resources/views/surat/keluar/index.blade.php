@extends('adminlte::page')
@section('title', 'Surat')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Surat</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="/cari/keluar" method="get">
                @csrf
                <div class="card-header">
                    <div class="container ">
                        <div class="row ">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text"
                                      class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Cari ....">
                                  </div>
                            </div>
                            <div class="form-group">

                              <select class="form-control" name="tipe" id="">
                                <option value="no_surat">No Surat</option>
                                <option value="prihal">Prihal</option>
                                <option value="tujuan">Tujuan</option>
                                <option value="tanggal_surat">Tanggal Surat</option>
                              </select>
                            </div>
                          <div class="row">
                            <div class="col-sm-2-15">
                                <button type="submit" class="btn btn-primary">Cari</button>
                               </div>
                          </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="text-center">
                <h3>Surat Keluar</h3>
            </div>
            @include('surat.keluar')
        </div>
    </div>
</div>
@stop
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
                    url: "/surat/" + id,
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

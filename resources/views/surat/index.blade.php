@extends('adminlte::page')
@section('title', 'Surat')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Surat</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary btn-md" href="{{ route('surat.create') }}">
                    <i class="fa fa-inbox"></i> Tambah Surat Masuk
                </a>
                <a class="btn btn-primary btn-md" href="{{ route('keluar.create') }}">
                    <i class="fas fa-sign-out-alt"></i> Tambah Surat Keluar

                </a>
            </div>
            <div class="text-center">
                <h3>Surat Masuk</h3>
            </div>
            @include('surat.masuk')
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

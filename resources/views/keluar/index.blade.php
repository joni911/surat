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
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 20px">No</th>
                            <th>No Agenda</th>
                            <th>No Surat</th>
                            <th>Asal Surat</th>
                            <th>Prihal</th>
                            <th>Tanggal Surat</th>
                            <th>Tanggal Terima Surat</th>
                            <th>Keterangan </th>
                            <th>Tujuan</th>
                            <th>File</th>
                            <th>Kirim</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @forelse($data as $item)
                        <tr>
                            <td>
                                {{ $no }}
                            </td>
                            <td>
                                {{ $item->no_surat }}
                            </td>
                            <td>
                                {{$item->no_asal_surat}}
                            </td>
                            <td>
                                {{$item->asal_surat}}
                            </td>
                            <td>
                                {{$item->prihal}}
                            </td>
                            <td>
                                {{$item->tanggal_surat}}
                            </td>
                            <td>
                                {{$item->tanggal_terima_surat}}
                            </td>
                            <td>
                                {{ $item->keterangan }}
                            </td>
                            <td>
                                {{$item->tujuan}}
                            </td>
                            <td>
                               <a href="/surat_storage/{{ $item->file }}">file</a>
                            </td>
                            <td>
                                <a class="btn btn-success"
                                href="{{ route('surat.show', ['surat'=>$item->id]) }}">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            </a>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary"
                                        href="{{ route('surat.edit', ['surat'=>$item->id]) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a class="btn btn-danger" onclick="hapus('{{ $item->id }}')" href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>

                        </tr>
                        <?php $no++;?>
                        @empty
                        <tr>
                            <td colspan="4">
                                Tidak ada data.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix text-right">
                {{ $data->links() }}
            </div>
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

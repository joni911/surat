@extends('adminlte::page')
@section('title', 'Disposisi')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Disposisi</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="container ">
                    <div class="row ">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="Cari no surat">
                              </div>
                        </div>
                      <div class="row">
                        <div class="col-sm-1-12">
                            <button type="submit" class="btn btn-primary">Cari</button>
                           </div>
                      </div>
                    </div>
                </div>
            </div>
            <p></p>
            <div class="card-body">
                <table class="table table-bordered">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px">No</th>
                                <th>No Surat</th>
                                <th>Asal Surat</th>
                                <th>Prihal</th>
                                <th>Disposisi</th>
                                <th>Kajian</th>
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
                                    {{ $item->surat->no_surat }}
                                </td>
                                <td>
                                    {{$item->surat->asal_surat}}
                                </td>
                                <td>
                                    {{$item->surat->prihal}}
                                </td>
                                <td>
                                    {{ $item->disposisi }}
                                </td>
                                <td>
                                    {{$item->Kajian}}
                                    <a href="/disposisi_storage/{{$item->file_disposisi}}">{{$item->file_disposisi}}</a>
                                </td>

                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success"
                                        href="{{ route('history.edit', ['history'=>$item->id]) }}">
                                        <i class="fas fa-edit"></i>

                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php $no++;?>
                        @empty
                        <tr>
                            <td colspan="5">
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
            30
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/petugas/" + id,
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

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
                    <form action="/disposisi/temukan" method="get">
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
                                        <option value="asal_surat">Asal Surat</option>
                                        <option value="prihal">Prihal</option>
                                        <option value="tujuan">Tujuan</option>
                                        <option value="tanggal_surat">Tanggal Surat</option>
                                        <option value="tanggal_terima_surat">Tanggal Terima Surat</option>
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
                </div>
            </div>
            @include('disposisi.surat')
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px">No</th>
                                <th>No Surat</th>
                                <th>Tanggal</th>
                                <th>Pembuat Kajian</th>
                                <th>Tujuan</th>
                                <th>Kajian</th>
                                <th>Disposisi</th>
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
                                    {{$item->surat->no_surat}}
                                </td>
                                <td>
                                    Dibuat Pada : {{ $item->tanggal_kajian }}
                                    <br>Jam : {{ $item->jam_kajian }}
                                </td>
                                <td>{{ $item->user}}</td>
                                <td>
                                    {{$item->tujuan}}
                                </td>
                                <td>
                                    {{ $item->kajian }}
                                </td>
                                <td>
                                    {{$item->disposisi}}
                                    <br>
                                    <a href="/disposisi_storage/{{$item->file_disposisi}}">Lihat File Disposisi disini</a>
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
            </div>
            <div class="card-footer clearfix text-right">
                {{ $data->links() }}
            </div>
            <div class="text-center">
                @if ($bagikan_detail->status == 'belum dibuka')
                <form class="form-horizontal" action="{{ route('bagikan_detail.update', ['bagikan_detail' => $bagikan_detail->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    {{-- <input type="text" name="id" value="1"> --}}
                    <input type="text" name="status" value="sudah dibaca" hidden>
                    <button type="submit" class="btn btn-primary">Tandai Sudah di Baca</button>
                </form>

                @else

                @endif
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

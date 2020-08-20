<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 20px">No</th>
                <th>Nama Jabatan</th>
                <th style="width: 80px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;?>
            @forelse($tujuan_detail as $item)
            <tr>
                <td>
                    {{ $no }}
                </td>
                <td>
                    {{ $item->jabatan_tujuan}}
                </td>
                <td>
                    <a class="btn btn-danger" onclick="hapus('{{ $item->id }}')" href="#">
                        <i class="fas fa-trash"></i>
                    </a>
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
                    url: "/tujuan_detail/" + id,
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

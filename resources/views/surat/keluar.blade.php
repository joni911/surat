<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 20px">No</th>
                <th>No Agenda</th>
                <th>Prihal</th>
                <th>Tanggal Surat</th>
                <th>Keterangan </th>
                <th>Tujuan</th>
                <th>File</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1;?>
            @forelse($keluar as $k)
            <tr>
                <td>
                    {{ $no }}
                </td>
                <td>
                    {{ $k->no_surat }}
                </td>
                <td>
                    {{$k->prihal}}
                </td>
                <td>
                    {{$k->tanggal_surat}}
                </td>

                <td>
                    {{ $k->keterangan }}
                </td>
                <td>
                    {{$k->tujuan}}
                </td>
                <td>
                    <a href="/surat_keluar_storage/{{ $k->file }}">file</a>
                </td>

                <td>
                    <div class="btn-group">
                        {{-- <a class="btn btn-success" href="{{ route('keluar.show', ['keluar'=>$k->id]) }}">
                            <i class="fab fa-whatsapp"></i>
                        </a> --}}
                        <a class="btn btn-primary" href="{{ route('keluar.edit', ['keluar'=>$k->id]) }}">
                            <i class="fas fa-pencil-alt"></i>
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

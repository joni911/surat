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
                <th>Aksi</th>
                {{-- <th>Aksi</th> --}}
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
                    <div class="btn-group">
                        <a class="btn btn-success" href="{{ route('surat.show', ['surat'=>$item->id]) }}">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a class="btn btn-primary" href="{{ route('surat.edit', ['surat'=>$item->id]) }}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>
                    </a>
                    </a>
                </td>
                {{-- <td>
                    <div class="btn-group">


                        {{-- <a class="btn btn-danger" onclick="hapus('{{ $item->id }}')" href="#">
                <i class="fas fa-trash"></i>
                </a> --}}
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

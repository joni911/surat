<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>No Surat</th>
                    <th>Tanggal</th>
                    <th>Pejabat Yang Mendisposisi</th>
                    <th>Tujuan</th>
                    <th>Disposisi</th>
                    <th>File Disposisi</th>
                    <th>Kajian</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @forelse($disposisi as $item)
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
                        {{$item->disposisi}}
                    </td>
                    <td>
                        <a href="/disposisi_storage/{{$item->file_disposisi}}">Link</a>
                    </td>
                    <td>
                        {{ $item->kajian }}
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

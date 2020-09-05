<div class="row">
    <div class="col-12">
        <div class="card">
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
                            @forelse($komentar as $item)
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
                                    <br>
                                    <a href="/disposisi_storage/{{$item->file_disposisi}}">Lihat File Kajian disini</a>
                                </td>
                                <td>
                                    {{$item->disposisi}}

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

        </div>
    </div>
</div>

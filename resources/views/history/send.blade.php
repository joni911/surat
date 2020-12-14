{{ csrf_field() }}
<div class="col-sm-offset-2 col-sm-8">
    <table class="table">
        <tbody>
            <tr>
                <td>Nomor Surat</td>
                <td>:</td>
                <td>{{$no_surat}}</td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td>:</td>
                <td>{{$no_wa->no_wa}}</td>

            </tr>
            <tr>
                <td>Asal Surat</td>
                <td>:</td>
                <td>{{$asal_surat}}</td>
            </tr>
            <tr>
                <td>Prihal</td>
                <td>:</td>
                <td>{{$prihal}}</td>
            </tr>
            <tr>
                <td>Disposisi</td>
                <td>:</td>
                <td>{{$kajian->disposisi}}</td>
            </tr>
            <tr>
                <td>Kajian</td>
                <td>:</td>
                <td>{{$kajian->kajian}}</td>
            </tr>
        </tbody>
    </table>
    </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a name="" id="" class="btn btn-success"
        href="https://wa.me/{{$no_wa->no_wa}}/?text=No Surat : {{$no_surat}}
            %0AAsal Surat : {{$asal_surat}}%0APrihal  : {{$prihal}}
            %0AKajian : {{$kajian->kajian}}
            %0ADisposisi : {{$kajian->disposisi}}
            %0ALink : https://bprsurat.synology.me/
            " target="balank_" role="button">
            <i class="fab fa-whatsapp    "></i>
                Kirim Wa
            </a>
        <a href="{{ route('inbox.index') }}" class="btn btn-primary" role="button">Kembali ke Kotak Masuk</a>
    </div>
</div>


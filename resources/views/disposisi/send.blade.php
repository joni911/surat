{{ csrf_field() }}
<p>Nomor Surat : {{$no_surat}}</p>
<p>Tujuan : {{$no_wa->no_wa}}</p>
<p>Asal Surat : {{$asal_surat}}</p>
<br>
<p>Prihal : {{$prihal}}</p>
<p>Keterangan : {{$keterangan}}</p>
<p>Kajian : {{$kajian->kajian}}</p>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a name="" id="" class="btn btn-success" href="https://wa.me/{{$no_wa->no_wa}}/?text=No Surat : {{$no_surat}}
            %0AAsal Surat : {{$asal_surat}}%0APrihal  : {{$prihal}}
            %0AKeterangan : {{$keterangan}}%0AKajian : {{$kajian->kajian}}
            " target="balank_" role="button">
            <i class="fab fa-whatsapp    "></i>
                Kirim Wa
            </a>
        <a href="{{ route('inbox.index') }}" class="btn btn-primary" role="button">Selesai</a>
    </div>
</div>


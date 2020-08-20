{{ csrf_field() }}
<p>Nomor Surat : {{$no_surat}}</p>
<p>Tujuan : {{$user->no_wa}}</p>
<p>Asal Surat : {{$asal_surat}}</p>
<br>
<p>Prihal : {{$prihal}}</p>
<p>Keterangan : {{$keterangan}}</p>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a name="" id="" class="btn btn-primary" href="https://wa.me/{{$user->no_wa}}/?text=No Surat : {{$no_surat}}%0AAsal Surat : {{$asal_surat}}%0APrihal  : {{$prihal}}%0AKeterangan : {{$keterangan}}
            " target="balank_" role="button">
            <i class="fab fa-whatsapp    "></i>
                Kirim Wa
            </a>
        <a href="{{ route('surat.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>


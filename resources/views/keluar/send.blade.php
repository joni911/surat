{{ csrf_field() }}
<p>Nomor Surat : {{$no_surat}}</p>
<p>Tujuan : </p>
<p>Asal Surat : </p>
<br>
<p>Prihal : {{$prihal}}</p>
<p>Keterangan : {{$keterangan}}</p>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a name="" id="" class="btn btn-success" href="https://wa.me/#/?text=No Surat :
        {{$no_surat}}%0AAsal Surat : #%0APrihal  : {{$prihal}}%0AKeterangan : {{$keterangan}}
        %0ALink : https://bprsurat.synology.me/
        " target="balank_" role="button">
            <i class="fab fa-whatsapp    "></i>
                Kirim Wa
            </a>
        <a href="{{ route('surat.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>


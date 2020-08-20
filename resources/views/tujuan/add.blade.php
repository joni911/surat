@extends('adminlte::page')
@section('title', 'Jabtan')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen tujuan</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Perhatian!</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                Tambah Tujuan {{$nama_tujuan}}
            </div>
            <div class="alert alert-info" role="alert">
                Tambahkan akses untuk mengirim surat oleh user <strong>{{$nama_tujuan}}</strong>
            </div>
            @include('tujuan.detail')
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('tujuan_detail.update', [$id]) }}" method="post">
                    @method('PUT')
                    @include('tujuan.form')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('plugins.Pace', true)

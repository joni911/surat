@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="card-body">



        @forelse($notifications as $notification)
            <div class="alert alert-success" role="alert">
                [{{ $notification->created_at }}] User {{ $notification->data['name'] }} ({{ $notification->data['email'] }}) has just registered.
                <a href="/gone/{{$notification->id}}" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                    lihat
                </a>
            </div>

            @if($loop->last)
                <a href="#" id="mark-all">
                    Mark all as read
                </a>
            @endif
        @empty
            There are no new notifications
        @endforelse

</div>
@endsection
@section('scripts')
@parent

@endsection

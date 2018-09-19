@extends('layouts.main')


@section('content')
    @foreach($events as $event)
        {{ $event }}
    @endforeach
@endsection
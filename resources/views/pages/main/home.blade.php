@extends('layouts.main')

@section('content')
    @if(!empty($slider))
    @include('partials.main.slider',['items'=>$slider->photos])
    @endif
@endsection

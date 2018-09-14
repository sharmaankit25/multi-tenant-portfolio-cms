@extends('layouts.main')

@section('content')
    @include('partials.main.slider',['items'=>$slider->photos])
@endsection
@extends('layouts.main')


@section('content')
    <div class="container">
        <h2 class="">{{ $page->title }}</h2>
        <p>{{ $page->content }}</p>
    </div>
   
@endsection


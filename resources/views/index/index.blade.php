@extends('layouts/main')

@section('content')
@foreach ($books as $book)
<h1>{{$book->title}}</h1>
<p>Published at: {{$book->publication_date}}</p>
<p>
@endforeach

@endsection

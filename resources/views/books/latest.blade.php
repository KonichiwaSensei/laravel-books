@extends('layouts/main')

@section('content')
<h1>The 10 Latest books:</h1>
<div class="container">
<ul id="latest-books"></ul>
</div>
<button id="load-books">Load Books</button>
@vite('resources/js/app.js')
@endsection
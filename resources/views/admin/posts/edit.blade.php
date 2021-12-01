@extends('admin.layouts.app')

@section('title', 'Editar Post')

@section('content')

	<h1>Editar Post <b>{{ $post->id }}</b></h1>

	<form action="{{ route('posts.update', $post->id) }}" method="post">
		@method('PUT')
		@include('admin.posts._partials.form')
	</form>

@endsection
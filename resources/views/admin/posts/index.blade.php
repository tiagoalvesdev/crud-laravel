@extends('admin.layouts.app')

@section('title', 'Listagem Posts')

@section('content')

	<a href="{{ route('posts.create') }}">Criar Novo Post</a>
	<hr>
	@if(session('message'))
		<div>
			{{ session('message') }}
		</div>
	@endif
	<h1>Posts</h1>

	<form action="{{ route('posts.search') }}" method="post">
		@csrf
		<input type="text" name="search" placeholder="Pesquisar">
		<button type="submit">Buscar</button>
	</form>

	@foreach ($posts as $post)
		<p>
			{{ $post->title }} 
			- <a href="{{ route('posts.show', $post->id) }}">Detalhes</a>
			- <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
		</p>
	@endforeach

	<hr>

	{{ (isset($filters)) ? $posts->appends($filters)->links() : $posts->links() }}

@endsection
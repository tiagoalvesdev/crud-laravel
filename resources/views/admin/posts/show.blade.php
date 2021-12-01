@extends('admin.layouts.app')

@section('title', 'Detalhe Post')

@section('content')

	<h1>Detalhes do Post - {{ $post->title }}</h1>

	<ul>
		<li><b>Titulo</b> = {{ $post->title }}</li>
		<li><b>Conteudo</b> = {{ $post->content }}</li>
	</ul>

	<form action="{{ route('posts.destroy', $post->id) }}" method="post">
		@csrf
		@method('DELETE')
		<button type="submit">Deletar este post</button>
	</form>
	
@endsection
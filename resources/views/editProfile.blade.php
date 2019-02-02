@extends('layouts.app')

@section('content')
<div class="container">
	<form method="post" action="{{ route('editar', Auth::user()->id )}}">
		@csrf
		<input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
		<h1>Editar datos</h1>
		<label for="name">
			Nombre: <input type="text" id="name" name="name" value="{{ Auth::user()->name }}">
		</label>
		<br>
		<label>
			Email: <input type="text" id="email" name="email" value="{{ Auth::user()->email }}">
		</label>
		<label>
			<input type="submit" name="guardar" value="Guardar">
		</label>
		<a href="/profile">Volver atras</a>
	</form>
</div>
@endsection

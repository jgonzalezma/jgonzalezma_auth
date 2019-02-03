@extends('layouts.app')

@section('content')
<div class="container">
	<form method="post" action="{{ route('createUser') }}">
		@csrf
		<label>
			Nombre: <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
		</label><br>
		<label>
			Email: <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
		</label><br>
		<label>
			Contraseña: <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
		</label><br>
		<label>
			Id rol: <input type="numbrer" name="rol_id" class="form-control{{ $errors->has('rol_id') ? ' is-invalid' : '' }}">
                @if ($errors->has('rol_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rol_id') }}</strong>
                    </span>
                @endif
		</label><br>
		<input type="submit" name="crearUsuario" value="Crear"><br>
		<a href="/listaUsuarios">Volver atrás</a>
	</form>
</div>
@endsection

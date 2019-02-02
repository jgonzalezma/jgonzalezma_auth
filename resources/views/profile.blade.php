@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Mi perfil</h1><br>
            <h3>User: {{ Auth::user()->name }}</h3>
            <h3>Email: {{ Auth::user()->email }}</h3>
            <a href="/editProfile">Editar</a>
        </div>
    </div>
</div>
@endsection

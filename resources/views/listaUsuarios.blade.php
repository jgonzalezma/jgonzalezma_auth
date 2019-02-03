@extends('layouts.app')

@section('content')

<style>
table, th, td {
  border: 1px solid black;
}
</style>

<div class="container">
  @foreach($users as $user)
  @csrf
  <form method="post" action="{{ route('deleteUser', $user->id) }}" >
  @endforeach
    <table>
  <tr>
    <th>Usuario</th>
    <th>Email</th>
    <th></th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td><button type="submit">Eliminar</button></td>
  </tr>
  @endforeach
</table>
</form>
<a href="/createUser">Crear nuevo usuario</a>
</div>
@endsection

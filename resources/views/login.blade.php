@extends('bootstrap')

@section('content')

<form action="/login" method="POST">
    @csrf
    <label>Email:</label>
    <input type="email" class="form-control" name="email" id="email">
    <label>Senha:</label>
    <input type="password" class="form-control" name="password" id="password">
    <br>
    <button type="submit" class="btn btn-primary btn-lg">Logar</button>
</form>

@endsection
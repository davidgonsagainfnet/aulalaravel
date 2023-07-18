@extends('bootstrap')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="/novousuario">
    @csrf

    @if ($errors->has('nome'))
        <span class="danger">{{$errors->first('nome')}}</span><br>
    @endif
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}">

    @if ($errors->has('email'))
        <span class="danger">{{$errors->first('email')}}</span><br>
    @endif
    <label>Email:</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">

    @if ($errors->has('password'))
        <span class="danger">{{$errors->first('password')}}</span><br>
    @endif
    <label>senha:</label>
    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">

    @if ($errors->has('password_new'))
        <span class="danger">{{$errors->first('password_new')}}</span><br>
    @endif
    <label>Confirmação:</label>
    <input type="password" class="form-control" name="password_new" id="password_new" value="{{ old('password_new') }}">
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
@extends('bootstrap')

@section('content')
<a type="button" class="btn btn-primary btn-lg" href="/novousuario">Novo Usuario</a>
<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>senha</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{$user->nome}}</td>
        <td>{{$user->senha}}</td>
    </tr>
    @endforeach


</table>
<div class="pagination">
    {{ $users->links('pagination::bootstrap-4')->withClass('pagination-lg') }}
</div>
@endsection

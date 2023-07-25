@extends('bootstrap')

@section('content')
<a type="button" class="btn btn-primary btn-lg" href="/novousuario">Novo Usuario</a>
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>senha</th>
        <th></th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{$user->nome}}</td>
        <td>{{$user->senha}}</td>
        <td>
            <form action="/usuario/{{$user->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach


</table>
<div class="pagination">
    {{ $users->links('pagination::bootstrap-4')->withClass('pagination-lg') }}
</div>
@endsection

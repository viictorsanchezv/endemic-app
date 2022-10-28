@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Estados</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success mt-3" href="{{ route('states.create') }}"> Crear Estado</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th width="280px">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($states as $state)
                    <tr>
                        <td>{{ $state->id }}</td>
                        <td>{{ $state->name }}</td>
                        <td>{{ $state->description }}</td>
                        <td>
                            <form action="{{ route('states.destroy',$state->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('states.edit',$state->id) }}">Editar</a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        
    </div>
@endsection

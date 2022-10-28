@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Causas</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('causes.create') }}"> Crear Causas</a>
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
                @foreach ($causes as $cause)
                    <tr>
                        <td>{{ $cause->id }}</td>
                        <td>{{ $cause->name }}</td>
                        <td>{{ $cause->description }}</td>
                        <td>
                            <form action="{{ route('causes.destroy',$cause->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('causes.edit',$cause->id) }}">Editar</a>
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

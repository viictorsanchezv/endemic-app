@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Enfermedades</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('diseases.create') }}"> Crear Enfermedad</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered ">
            <thead class="alert alert-success">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th width="280px">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diseases as $disease)
                    <tr>
                        <td>{{ $disease->id }}</td>
                        <td>{{ $disease->name }}</td>
                        <td>{{ $disease->description }}</td>
                        <td>
                            <form action="{{ route('diseases.destroy',$disease->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('diseases.edit',$disease->id) }}">Editar</a>
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

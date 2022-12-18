@extends('layouts.app', ['page' => __('Enfermedades'), 'pageSlug' => 'enfermedades'])

@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Enfermedades</h2>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{ route('diseases.create') }}"> Crear enfermedad</a>
                </div>
            </div>
        </div>
      <div class="card">
        <table class="table tablesorter " id="">
            <thead class=" text-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Accion</th>
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
    </div>
  </div>
@endsection

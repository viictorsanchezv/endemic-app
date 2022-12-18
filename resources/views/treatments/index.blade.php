@extends('layouts.app', ['page' => __('Tratamientos'), 'pageSlug' => 'tratamientos'])

@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Tratamientos</h2>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{ route('treatments.create') }}"> Crear tratamiento</a>
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
                @foreach ($treatments as $treatment)
                    <tr>
                        <td>{{ $treatment->id }}</td>
                        <td>{{ $treatment->name }}</td>
                        <td>{{ $treatment->description }}</td>
                        <td>
                            <form action="{{ route('treatments.destroy',$treatment->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('treatments.edit',$treatment->id) }}">Editar</a>
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

@extends('layouts.app', ['page' => __('Causas'), 'pageSlug' => 'causas'])

@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Causas</h2>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{ route('causes.create') }}"> Crear causa</a>
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
    </div>
  </div>
@endsection

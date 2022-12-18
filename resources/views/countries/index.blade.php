@extends('layouts.app', ['page' => __('Pais'), 'pageSlug' => 'pais'])

@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Paises</h2>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{ route('countries.create') }}"> Crear pais</a>
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
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->description }}</td>
                        <td>
                            <form action="{{ route('countries.destroy',$country->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('countries.edit',$country->id) }}">Editar</a>
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

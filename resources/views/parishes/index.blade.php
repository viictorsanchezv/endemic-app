@extends('layouts.app', ['page' => __('Parroquias'), 'pageSlug' => 'parroquias'])

@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Parroquias</h2>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{ route('parishes.create') }}"> Crear parroquia</a>
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
                @foreach ($parishes as $parish)
                    <tr>
                        <td>{{ $parish->id }}</td>
                        <td>{{ $parish->name }}</td>
                        <td>{{ $parish->description }}</td>
                        <td>
                            <form action="{{ route('parishes.destroy',$parish->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('parishes.edit',$parish->id) }}">Editar</a>
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

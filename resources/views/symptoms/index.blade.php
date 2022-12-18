@extends('layouts.app', ['page' => __('Sintomas'), 'pageSlug' => 'sintomas'])

@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Sintomas</h2>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{ route('symptoms.create') }}"> Crear sintoma</a>
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
                @foreach ($symptoms as $symptom)
                    <tr>
                        <td>{{ $symptom->id }}</td>
                        <td>{{ $symptom->name }}</td>
                        <td>{{ $symptom->description }}</td>
                        <td>
                            <form action="{{ route('symptoms.destroy',$symptom->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('symptoms.edit',$symptom->id) }}">Editar</a>
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

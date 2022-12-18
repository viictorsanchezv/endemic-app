@extends('layouts.app', ['page' => __('Noticias'), 'pageSlug' => 'noticias'])

@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Noticias</h2>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{ route('news.create') }}"> Crear noticia</a>
                </div>
            </div>
        </div>
      <div class="card">
        <table class="table tablesorter " id="">
            <thead class=" text-primary">
                 <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo de Noticia</th>
                    <th scope="col">Descripcion de Noticia</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Accion</th>
                </tr>
               
            </thead>
            <tbody>
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->description }}</td>
                        <td>{{ $new->date }}</td>
                        <td>
                            <form action="{{ route('news.destroy',$new->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}">Editar</a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-1">Borrar</button>
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

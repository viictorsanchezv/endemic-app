@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Noticias</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('news.create') }}"> Crear Noticia</a>
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
                    <th>Titulo de Noticia</th>
                    <th>Descripcion de Noticia</th>
                    <th>Fecha</th>
                    <th width="280px">Accion</th>
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
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        
    </div>
@endsection

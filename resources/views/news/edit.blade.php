@extends('layouts.app', ['page' => __('Noticias'), 'pageSlug' => 'noticias'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Editar Sintoma</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('news.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Titulo</label>
                <input type="text" class="form-control"  name="title" value="{{ $new->title }}" >
                <small  class="form-text text-muted">Titulo de la noticia</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Contenido</label>
                <input type="text" class="form-control"  name="description" value="{{ $new->description }}" >
                <small class="form-text text-muted" >Contenido de la noticia.</small>
              </div>
              
               <div class="form-group mt-3">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="text" class="form-control"  name="date" value="{{ $new->date }}" >
                <small class="form-text text-muted" >Fecha de la noticia, puede que sea una noticia vieja y se publique hoy.</small>
              </div>
              
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

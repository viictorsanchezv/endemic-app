@extends('layouts.app', ['page' => __('Pais'), 'pageSlug' => 'pais'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Editar Pais</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('countries.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('countries.update',$country ) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ $country->name }}" >
                <small  class="form-text text-muted">Nombre del pais.</small>
              </div>
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description" value="{{ $country->description }}">
                <small  class="form-text text-muted" >Pequeña descripcion acorde al pais.</small>
              </div>
        
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

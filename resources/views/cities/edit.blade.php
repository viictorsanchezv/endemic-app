@extends('layouts.app', ['page' => __('Ciudad'), 'pageSlug' => 'ciudad'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Agregar Ciudad</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('cities.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('cities.update',$city ) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $city->name }}" >
                <small  class="form-text text-muted">Nombre de la ciudad.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description"  value="{{ $city->description }}" >
                <small class="form-text text-muted" >Pequeña descripcion acorde a la ciudad.</small>
              </div>
              
               <div class="form-group mt-3">
                <label for="exampleInputEmail1">Indice Aedico</label>
                <input type="text" class="form-control" name="aedic_index" value="{{ $city->aedic_index }}" >
                <small  class="form-text text-muted">Indice de mosquito por persona en la ciudad.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Temperatura</label>
                <input type="text" class="form-control" name="temperature" value="{{ $city->temperature }}" >
                <small class="form-text text-muted" >Temperatura de la ciudad.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Humedad</label>
                <input type="text" class="form-control" name="humidity" value="{{ $city->humidity }}" >
                <small  class="form-text text-muted">Indice de mosquito por persona en la ciudad.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Poblacion</label>
                <input type="text" class="form-control"  name="population" value="{{ $city->population }}" >
                <small class="form-text text-muted" >Temperatura de la ciudad.</small>
              </div>
              
              
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

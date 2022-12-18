@extends('layouts.app', ['page' => __('Parroquia'), 'pageSlug' => 'parroquia'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Agregar Parroquia</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('parishes.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('parishes.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" >
                <small  class="form-text text-muted">Nombre de la parroquia.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description">
                <small class="form-text text-muted" >Pequeña descripcion acorde a la parroquia.</small>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlSelect1">Selecciona una ciudad</label>
                <select class="form-control" name="city_id" >
                    <option value="" default>Escoger ciudad</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{ $city->name }}</option>
                    @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

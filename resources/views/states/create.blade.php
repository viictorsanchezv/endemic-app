@extends('layouts.app', ['page' => __('Pais'), 'pageSlug' => 'pais'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Agregar Estado</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('states.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('states.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" >
                <small  class="form-text text-muted">Nombre del estado.</small>
              </div>
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description">
                <small class="form-text text-muted" >Pequeña descripcion acorde al estado.</small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Selecciona un pais</label>
                <select class="form-control"  name="country_id">
                    <option value="" default>Escoge el pais</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{ $country->name }}</option>
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

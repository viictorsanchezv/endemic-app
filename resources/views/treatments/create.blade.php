@extends('layouts.app', ['page' => __('Tratamientos'), 'pageSlug' => 'tratamientos'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Agregar Tratamiento</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('treatments.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('treatments.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" >
                <small  class="form-text text-muted">Nombre del tratamiento.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description">
                <small class="form-text text-muted" >Pequeña descripcion acerca del tratamiento.</small>
              </div>
              
              
              <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

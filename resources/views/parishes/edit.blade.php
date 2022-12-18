@extends('layouts.app', ['page' => __('Parroquia'), 'pageSlug' => 'parroquia'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Editar Parroquia</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('parishes.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('parishes.update',$parish ) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $parish->name }}">
                <small  class="form-text text-muted">Nombre de la parroquia.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description" value="{{ $parish->description }}">
                <small class="form-text text-muted" >Pequeña descripcion acorde a la parroquia.</small>
              </div>
              
              
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

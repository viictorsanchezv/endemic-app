@extends('layouts.app', ['page' => __('Estado'), 'pageSlug' => 'estados'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Editar Estado</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('states.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('states.update',$state ) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ $state->name }}" >
                <small  class="form-text text-muted">Nombre del estado.</small>
              </div>
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description" value="{{ $state->description }}">
                <small class="form-text text-muted" >Pequeña descripcion acorde al estado.</small>
              </div>
        
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

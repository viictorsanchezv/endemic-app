@extends('layouts.app', ['page' => __('Usuarios'), 'pageSlug' => 'usuario'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Editar Usuario</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('users.update',$user ) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" >
                <small  class="form-text text-muted">Nombre del usuario.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" >
                <small class="form-text text-muted" >Correo electronicod el usuario.</small>
              </div>
              
              
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

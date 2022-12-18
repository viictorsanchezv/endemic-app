@extends('layouts.app', ['page' => __('Roles'), 'pageSlug' => 'roles'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Editar Role</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('roles.update',$role ) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" >
                <small  class="form-text text-muted">Nombre del role.</small>
              </div>
              
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

@extends('layouts.app', ['page' => __('Sintomas'), 'pageSlug' => 'sintomas'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Editar Sintoma</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('symptoms.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('symptoms.update',$symptom ) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
              <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $symptom->name }}" >
                <small  class="form-text text-muted">Nombre del sintoma.</small>
              </div>
              
              <div class="form-group mt-3">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" name="description" value="{{ $symptom->description }}" >
                <small class="form-text text-muted" >Pequeña descripcion acerca del sintoma.</small>
              </div>
              
              
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

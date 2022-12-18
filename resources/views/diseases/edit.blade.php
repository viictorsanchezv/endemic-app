@extends('layouts.app', ['page' => __('Enfermedades'), 'pageSlug' => 'enfermedades'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Agregar Enfermedad</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('diseases.index') }}"> Atras</a>
        
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <form action="{{ route('diseases.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
           
                <div class="form-group mt-3">
                    <label>Nombre:</label>
                    <input type="text" name="name" class="form-control mt-3" value="{{ $disease->name }}" >
                    <small  class="form-text text-muted">Nombre de la enfermedad.</small>
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
           
            
                <!--<div class="form-group mt-3">-->
                <!--    <label>Fecha:</label>-->
                <!--    <input type="text" name="date" class="form-control mt-3" value="{{ $disease->contagion_date }}">-->
                <!--    <small  class="form-text text-muted">Fecha descubrimiento de la enfermedad.</small>-->
                <!--    @error('date')-->
                <!--    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>-->
                <!--    @enderror-->
                <!--</div>-->
          
           
                <!--<div class="form-group mt-3">-->
                <!--    <label>Numero de casos reportados:</label>-->
                <!--    <input type="text" name="cases" class="form-control mt-3" value="{{ $disease->cases }}">-->
                <!--    <small  class="form-text text-muted">Numero de casos asociados a esta enfermedad.</small>-->
                <!--    @error('cases')-->
                <!--    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>-->
                <!--    @enderror-->
                <!--</div>-->
            
                <div class="form-group mt-3">
                    <label>Descripcion:</label>
                    <input name="description" class="form-control mt-3" value="{{ $disease->description }}">
                    <small  class="form-text text-muted">Descripcion de la enfermedad.</small>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            
                <!--<div class="form-group mt-3">-->
                <!--    <label>Causas Enfermedad:</label>-->
                <!--    <select name="cause_id" class="form-select mt-3 w-100" multiple>-->
                <!--        <option value="" default>Seleccione las causas</option>-->
                <!--        @foreach ($causes as $cause)-->
                <!--        <option value="{{$cause->id}}">{{ $cause->name }}</option>-->
                <!--        @endforeach-->
                <!--    </select>-->
                <!--    <small  class="form-text text-muted">Seleccione las causas asociadas a la enfermedad.</small>-->
                <!--</div>-->
          
                <!--<div class="form-group mt-3">-->
                <!--    <label>Sintomas:</label>-->
                <!--    <select name="symptoms_id" class="form-select mt-3 w-100" multiple required>-->
                <!--        <option value="" default>Seleccione los sintomas</option>-->
                <!--        @foreach ($symptoms as $symptom)-->
                <!--        <option value="{{$symptom->id}}">{{ $symptom->name }}</option>-->
                <!--        @endforeach-->
                <!--    </select>-->
                <!--    <small  class="form-text text-muted">Seleccione sintomas asociados a la enfermedad.</small>-->
                <!--</div>-->
            
                <!--<div class="form-group mt-3">-->
                <!--    <label>Tratamientos:</label>-->
                <!--    <select name="treatments_id" class="form-select mt-3 w-100" required>-->
                <!--        <option value="" default>Seleccione el tratamiento</option>-->
                <!--        @foreach ($treatments as $treatment)-->
                <!--        <option value="{{$treatment->id}}">{{ $treatment->name }}</option>-->
                <!--        @endforeach-->
                <!--    </select>-->
                <!--    <small  class="form-text text-muted">Seleccione un tratamiento asociado a la enfermedad.</small>-->
                <!--</div>-->
            
                <!--<div class="form-group mt-3">-->
                <!--    <label>Ciudad:</label>-->
                <!--    <select name="city_id" class="form-select mt-3 w-100"required >-->
                <!--        <option value="" default>Seleccione la ciudad</option>-->
                <!--        @foreach ($cities as $city)-->
                <!--        <option value="{{$city->id}}">{{ $city->name }}</option>-->
                <!--        @endforeach-->
                <!--    </select>-->
                <!--    <small  class="form-text text-muted">Seleccione una ciudad asociada a la enfermedad.</small>-->
                <!--</div>-->
    
              
              <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection

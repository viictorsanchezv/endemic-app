@extends('layouts.app')

@section('content')
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar Ciudad</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('cities.index') }}"> Atras</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('cities.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mt-3">
                        <strong>Nombre</strong>
                        <input type="text" name="name" class="form-control mt-3" >
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mt-3">
                        <strong>Descripcion</strong>
                        <textarea name="description" class="form-control mt-3" >
                            
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mt-3">
                        <strong>Estado:</strong>
                        <select name="state_id" class="form-control mt-3">
                            <option value="" default>Seleccion un estado</option>
                            @foreach ($states as $state)
                            <option value="{{$state->id}}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                      
                        @error('state_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $state_id }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3 mt-5">Crear</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar Tratamiento</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary mt-3" href="{{ route('treatments.index') }}"> Atras</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('treatments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mt-3">
                        <strong>Nombre del tratamiento:</strong>
                        <input type="text" name="name" class="form-control mt-3" placeholder="Nombre Tratamiento">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mt-3">
                        <strong>Descripcion del tratamiento:</strong>
                        <textarea name="description" class="form-control mt-3">
                            
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1 mt-3">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary ml-3 mt-5">Agregar</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2  mt-3">
                    <h2>Crear Causa</h2>
                </div>
                <div class="pull-right mt-3">
                    <a class="btn btn-primary" href="{{ route('causes.index') }}"> Atras</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('causes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group  mt-3">
                        <strong>Nombre</strong>
                        <input type="text" name="name" class="form-control mt-3">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group  mt-3">
                        <strong>Descripcion</strong>
                        <textarea name="description" class="form-control mt-3" placeholder="Cause Description">
                            
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary ml-3  mt-5">Crear</button>
            </div>
        </form>
    </div>
@endsection

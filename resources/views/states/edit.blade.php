@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Estado</h2>
                </div>
                <div class="pull-right mt-3">
                    <a class="btn btn-primary" href="{{ route('states.index') }}" enctype="multipart/form-data">
                        Atras</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('states.update',$state ) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mt-3">
                        <strong>Nombre:</strong>
                        <input type="text" name="name" value="{{ $state->name }}" class="form-control mt-3">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mt-3">
                        <strong>Descripcion:</strong>
                        <textarea name="description" class="form-control mt-3" 
                            value="{{ $state->description }}">{{ $state->description }} </textarea>
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3 mt-5">Editar</button>
            </div>
        </form>
    </div>
@endsection

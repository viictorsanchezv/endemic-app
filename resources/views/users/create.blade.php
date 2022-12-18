@extends('layouts.app', ['page' => __('Usuario'), 'pageSlug' => 'usuario'])

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2>Agregar Usuario</h2>
            </div>
           
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Atras</a>
        
        </div>
    </div>
      <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
              <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Seleccione un role</label>
                    <select class="form-control"  name="role_id">
                        <option value="" default>Seleccione un role</option>
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
                    @include('alerts.feedback', ['field' => 'name'])
                </div>
                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-email-85"></i>
                        </div>
                    </div>
                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}">
                </div>
            
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
              </div>
            </div>
        </div>
      </div>
@endsection

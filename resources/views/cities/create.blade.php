@extends('layouts.app')

@section('content')
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add City</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('cities.index') }}"> Back</a>
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
                    <div class="form-group">
                        <strong>City Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="City Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>City Description:</strong>
                        <textarea name="description" class="form-control" placeholder="City Description">
                            
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>State:</strong>
                        <select name="state_id" class="form-control">
                            <option value="" default>Choose an State</option>
                            @foreach ($states as $state)
                            <option value="{{$state->id}}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                      
                        @error('state_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $state_id }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
@endsection

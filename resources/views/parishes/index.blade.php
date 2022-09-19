@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Parishes</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('parishes.create') }}"> Create City</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>City Name</th>
                    <th>City Description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parishes as $parish)
                    <tr>
                        <td>{{ $parish->id }}</td>
                        <td>{{ $parish->name }}</td>
                        <td>{{ $parish->description }}</td>
                        <td>
                            <form action="{{ route('parishes.destroy',$parish->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('parishes.edit',$parish->id) }}">Edit</a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        
    </div>
@endsection
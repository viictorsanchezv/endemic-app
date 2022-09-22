@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Symptoms</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('symptoms.create') }}"> Create Symptom</a>
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
                    <th>Symptom Name</th>
                    <th>Symptom Description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($symptoms as $symptom)
                    <tr>
                        <td>{{ $symptom->id }}</td>
                        <td>{{ $symptom->name }}</td>
                        <td>{{ $symptom->description }}</td>
                        <td>
                            <form action="{{ route('symptoms.destroy',$symptom->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('symptoms.edit',$symptom->id) }}">Edit</a>
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

@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Treatments</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('treatments.create') }}"> Create Treatment</a>
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
                    <th>Treatment Name</th>
                    <th>Treatment Description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($treatments as $treatment)
                    <tr>
                        <td>{{ $treatment->id }}</td>
                        <td>{{ $treatment->name }}</td>
                        <td>{{ $treatment->description }}</td>
                        <td>
                            <form action="{{ route('treatments.destroy',$treatment->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('treatments.edit',$treatment->id) }}">Edit</a>
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

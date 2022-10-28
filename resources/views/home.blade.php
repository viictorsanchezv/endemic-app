@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-primary bg-gradient text-white">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-primary" role="alert">
                        <a href="{{ route('treatments.index') }}">
                            {{ __('Tratamientos') }}
                        </a>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        <a href="{{ route('causes.index') }}">
                            {{ __('Causas') }}
                        </a>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        <a href="{{ route('symptoms.index') }}">
                            {{ __('Sintomas') }}
                        </a>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        <a href="{{ route('countries.index') }}">
                            {{ __('Paises') }}
                        </a>
                    </div>

                    <div class="alert alert-primary" role="alert">      
                        <a href="{{ route('states.index') }}">
                            {{ __('Estados') }}
                        </a>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        <a href="{{ route('cities.index') }}">
                            {{ __('Ciudades') }}
                        </a>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        <a href="{{ route('parishes.index') }}">
                            {{ __('Parroquias') }}
                        </a>
                    </div>

                    <div class="alert alert-primary" role="alert">
                        <a href="{{ route('news.index') }}">
                            {{ __('Noticias') }}
                        </a>
                    </div>

            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

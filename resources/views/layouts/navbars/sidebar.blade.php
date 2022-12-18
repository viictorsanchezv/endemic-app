<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-normal">{{ __('Tablero') }}</a>
        </div>
        <ul class="nav">
                <li >
                    <a href="{{ route('home') }}">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
            @switch(auth()->user()->role_id)
                @case(1)
                
                <li >
                    <a href="{{ route('diseases.index') }}">
                        <i class="tim-icons icon-vector"></i>
                        <p>{{ _('Enfermedades') }}</p>
                    </a>
                </li>
                
                <li >
                    <a href="{{ route('symptoms.index') }}">
                        <i class="tim-icons icon-sound-wave"></i>
                        <p>{{ _('Sintomas Enfermedades') }}</p>
                    </a>
                </li>
                
                 <li >
                    <a href="{{ route('causes.index') }}">
                        <i class="tim-icons icon-bulb-63"></i>
                        <p>{{ _('Causas Enfermedades') }}</p>
                    </a>
                </li>
                
                 <li >
                    <a href="{{ route('treatments.index') }}">
                        <i class="tim-icons icon-heart-2"></i>
                        <p>{{ _('Tratamientos Enfermedades') }}</p>
                    </a>
                </li>
                
                <li >
                    <a href="{{ route('news.index') }}">
                        <i class="tim-icons icon-paper"></i>
                        <p>{{ _('Noticias') }}</p>
                    </a>
                </li>
                
                <li >
                    <a href="{{ route('countries.index') }}">
                        <i class="tim-icons icon-square-pin"></i>
                        <p>{{ _('Paises') }}</p>
                    </a>
                </li>
                <li >
                    <a href="{{ route('states.index') }}">
                        <i class="tim-icons icon-square-pin"></i>
                        <p>{{ _('Estados') }}</p>
                    </a>
                </li>
                <li >
                    <a href="{{ route('cities.index') }}">
                        <i class="tim-icons icon-square-pin"></i>
                        <p>{{ _('Ciudades') }}</p>
                    </a>
                </li>
                <li >
                    <a href="{{ route('parishes.index') }}">
                        <i class="tim-icons icon-square-pin"></i>
                        <p>{{ _('Parroquias') }}</p>
                    </a>
                </li>
                 
                <li >
                    <a href="{{ route('roles.index') }}">
                        <i class="tim-icons icon-key-25"></i>
                        <p>{{ _('Roles') }}</p>
                    </a>
                </li>
                      
                 <li >
                    <a href="{{ route('users.index') }}">
                        <i class="tim-icons icon-key-25"></i>
                        <p>{{ _('Usuarios') }}</p>
                    </a>
                </li> 
                @break
             
                @case(2)
                
                <li >
                    <a href="{{ route('diseases.index') }}">
                        <i class="tim-icons icon-vector"></i>
                        <p>{{ _('Enfermedades') }}</p>
                    </a>
                </li>
                
                <li >
                    <a href="{{ route('symptoms.index') }}">
                        <i class="tim-icons icon-sound-wave"></i>
                        <p>{{ _('Sintomas Enfermedades') }}</p>
                    </a>
                </li>
                
                 <li >
                    <a href="{{ route('causes.index') }}">
                        <i class="tim-icons icon-bulb-63"></i>
                        <p>{{ _('Causas Enfermedades') }}</p>
                    </a>
                </li>
                
                <li >
                    <a href="{{ route('treatments.index') }}">
                        <i class="tim-icons icon-heart-2"></i>
                        <p>{{ _('Tratamientos Enfermedades') }}</p>
                    </a>
                </li>
                    
                    @break
                
                @case(3)
                
                    <li >
                        <a href="{{ route('news.index') }}">
                            <i class="tim-icons icon-paper"></i>
                            <p>{{ _('Noticias') }}</p>
                        </a>
                    </li>
                    
                    @break
                @default
                    
            @endswitch
    
           
        </ul>
    </div>
</div>

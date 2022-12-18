<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper d-none">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#">{{ $page ?? __('Tablero') }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                
                
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo">
                            <img src="{{ asset('black') }}/img/anime3.png" alt="{{ __('Profile Photo') }}">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none">{{ __('Cerrar Sesion') }}</p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        <li class="nav-link">
                            <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Perfil') }}</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        @switch(auth()->user()->role_id)
                            @case(1)
                            
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('diseases.index') }}">
                                    {{ _('Enfermedades') }}
                                </a>
                            </li>
                            
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('symptoms.index') }}">
                                    {{ _('Sintomas Enfermedades') }}
                                </a>
                            </li>
                            
                             <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('causes.index') }}">
                                    {{ _('Causas Enfermedades') }}
                                </a>
                            </li>
                            
                             <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('treatments.index') }}">
                                    {{ _('Tratamientos Enfermedades') }}
                                </a>
                            </li>
                            
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('news.index') }}">
                                    {{ _('Noticias') }}
                                </a>
                            </li>
                            
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('countries.index') }}">
                                   {{ _('Paises') }}
                                </a>
                            </li>
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('states.index') }}">
                                    {{ _('Estados') }}
                                </a>
                            </li>
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('cities.index') }}">
                                    {{ _('Ciudades') }}
                                </a>
                            </li>
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('parishes.index') }}">
                                    {{ _('Parroquias') }}
                                </a>
                            </li>
                             
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('roles.index') }}">
                                    {{ _('Roles') }}
                                </a>
                            </li>
                                  
                             <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('users.index') }}">
                                    {{ _('Usuarios') }}
                                </a>
                            </li> 
                            @break
                         
                            @case(2)
                            
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('diseases.index') }}">
                                   {{ _('Enfermedades') }}
                                </a>
                            </li>
                            
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('symptoms.index') }}">
                                    {{ _('Sintomas Enfermedades') }}
                                </a>
                            </li>
                            
                             <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('causes.index') }}">
                                    {{ _('Causas Enfermedades') }}
                                </a>
                            </li>
                            
                            <li class="nav-link" >
                                <a class="nav-item dropdown-item" href="{{ route('treatments.index') }}">
                                    {{ _('Tratamientos Enfermedades') }}
                                </a>
                            </li>
                                
                                @break
                            
                            @case(3)
                            
                                <li class="nav-link" >
                                    <a class="nav-item dropdown-item" href="{{ route('news.index') }}">
                                        {{ _('Noticias') }}
                                    </a>
                                </li>
                                
                                @break
                            @default
                                
                        @endswitch
                        <li class="dropdown-divider"></li>
                        <li class="nav-link">
                            <a href="{{ route('home') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Cerrar sesion') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                    <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
        </div>
    </div>
</div>

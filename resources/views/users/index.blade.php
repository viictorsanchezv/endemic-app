<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Extra details for Live View on GitHub Pages -->
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard-laravel" />
        <!--  Social tags      -->
        <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, Black dashboard Laravel bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
        <meta name="description" content="Black Dashboard Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Black Dashboard Laravel by Creative Tim">
        <meta itemprop="description" content="Black Dashboard Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
        <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/164/original/opt_blk_laravel_thumbnail.jpg?1561102244">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="Black Dashboard Laravel by Creative Tim">
        <meta name="twitter:description" content="Black Dashboard Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/164/original/opt_blk_laravel_thumbnail.jpg?1561102244">
        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Black Dashboard Laravel by Creative Tim" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://black-dashboard-laravel.creative-tim.com/" />
        <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/164/original/opt_blk_laravel_thumbnail.jpg?1561102244" />
        <meta property="og:description" content="Black Dashboard Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you." />
        <meta property="og:site_name" content="Creative Tim" />
        <title>Aplicacion Endemica</title>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('black') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('black') }}/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('black') }}/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="{{ asset('black') }}/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
        <link href="{{ asset('black') }}/css/theme.css" rel="stylesheet" />
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
        <!-- End Google Tag Manager -->
    </head>
<body class="">
            <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
                <div class="wrapper">
                        <div class="sidebar">
                                <div class="sidebar-wrapper">
                                    <div class="logo">
                                        <a href="#" class="simple-text logo-normal">{{ _('Tablero') }}</a>
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
                            
            <div class="main-panel">
                    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                            <div class="container-fluid">
                                <div class="navbar-wrapper">
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
                                                <p class="d-lg-none">{{ __('Log out') }}</p>
                                            </a>
                                            <ul class="dropdown-menu dropdown-navbar">
                                                <li class="nav-link">
                                                    <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Profile') }}</a>
                                                </li>
                                               
                                                <li class="dropdown-divider"></li>
                                                <li class="nav-link">
                                                    <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="separator d-lg-none"></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                      
                        


                <div class="content">
                        <div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Agregar Usuario</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
                <div class="">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Creation Date</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->created_at}}</td>
                                <td>
                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>

    </div>
</div>
                </div>

            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            <input type="hidden" name="_token" value="ub2DzAIrgUnghVvu3l3KAbbq0UztNO8yfkrDNm6n">            </form>
            <!--<div class="fixed-plugin">-->
            <!--    <div class="dropdown show-dropdown">-->
            <!--        <a href="#" data-toggle="dropdown">-->
            <!--        <i class="fa fa-cog fa-2x"> </i>-->
            <!--        </a>-->
            <!--        <ul class="dropdown-menu">-->
            <!--        <li class="header-title"> Sidebar Background</li>-->
            <!--        <li class="adjustments-line">-->
            <!--            <a href="javascript:void(0)" class="switch-trigger background-color">-->
            <!--            <div class="badge-colors text-center">-->
            <!--                <span class="badge filter badge-primary active" data-color="primary"></span>-->
            <!--                <span class="badge filter badge-info" data-color="blue"></span>-->
            <!--                <span class="badge filter badge-success" data-color="green"></span>-->
            <!--            </div>-->
            <!--            <div class="clearfix"></div>-->
            <!--            </a>-->
            <!--        </li>-->
            <!--        <li class="button-container">-->
            <!--            <a href="https://www.creative-tim.com/product/black-dashboard-laravel" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>-->
            <!--            <a href="https://black-dashboard-laravel.creative-tim.com/docs/getting-started/laravel-setup.html" target="_blank" class="btn btn-default btn-block btn-round">-->
            <!--            Documentation-->
            <!--            </a>-->
            <!--            <a href="https://www.creative-tim.com/product/black-dashboard-pro-laravel" target="_blank" class="btn btn-danger btn-block btn-round">-->
            <!--            Upgrade to PRO-->
            <!--            </a>-->
            <!--        </li>-->
            <!--        <li class="header-title">Thank you for 95 shares!</li>-->
            <!--        <li class="button-container text-center">-->
            <!--            <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> · 45</button>-->
            <!--            <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> · 50</button>-->
            <!--            <br>-->
            <!--            <br>-->
            <!--            <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard-laravel" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>-->
            <!--        </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</div>-->
    <script src="{{ asset('black') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('black') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('black') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('black') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Chart JS -->
    {{-- <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script> --}}
    <!--  Notifications Plugin    -->
    <script src="{{ asset('black') }}/js/plugins/bootstrap-notify.js"></script>

    <script src="{{ asset('black') }}/js/black-dashboard.min.js?v=1.0.0"></script>
    <script src="{{ asset('black') }}/js/theme.js"></script>

    @stack('js')

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (white_color == true) {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').removeClass('white-content');
                            }, 900);
                            white_color = false;
                        } else {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').addClass('white-content');
                            }, 900);

                            white_color = true;
                        }
                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    @stack('js')
    <script>
    // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
        }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");
        } catch (err) {
        console.log('Facebook Track Error:', err);
        }
    </script>
    <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
</body>
</html>

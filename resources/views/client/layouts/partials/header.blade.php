<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    @if (isset($pageInfo))
        <meta name="keywords" content="{{ $pageInfo->meta_keywords }}">
        <meta name="description" content="{{ $pageInfo->meta_description }}">
        <meta name="author" content="{{ $pageInfo->meta_author }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <title>{{ $pageInfo->meta_title }}</title>
    @else
        <meta name="description" content="Erol Günen">
        <meta name="author" content="">
        <title>Erol Günen</title>
    @endif


    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    


    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/meanmenu.css">
    
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/icofont.min.css">
    
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/slick.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/slick-theme.min.css">
    
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/magnific-popup.min.css">
    
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/animate.min.css">
    
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/odometer.min.css">
    
    <link rel="stylesheet" href="{{ URL::to('/') }}/clientassets/assets/css/style.css">
    
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <link rel="stylesheet" href="assets/css/theme-dark.css">

    @yield('styles')
</head>

<body>
    {{-- <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9 col-lg-9">
                    <div class="header-top-item">
                        <div class="header-top-left">
                            <ul>
                                <li>
                                    <a href="tel:{{$settings['phone']}}">
                                        <i class="icofont-ui-call"></i>
                                        Telefon : {{$settings['phone']}}
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="mailto:{{$settings['e-mail']}}">
                                        <i class="icofont-ui-message"></i>
                                        <span class="__cf_email__"
                                            data-cfemail="a3cbc6cfcfcce3cec6c7d0c6d58dc0ccce">{{$settings['e-mail']}}</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    {{$settings['adress']}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="header-top-item">
                        <div class="header-top-right">
                            <ul>
                                @foreach ($socialMediaIcons as $item)
                                <li>
                                    <a href="{{$item->url}}">
                                        <i class="{{$item->icon_class}}"></i>
                                    </a>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="{{url('/')}}" class="logo">
                <img src="assets/img/logo-two.png" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
					<div style="width:200px;">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{ URL::to('/') }}/uploads/erollogo5.jpg" style="width:200px;" alt="Logo">
                    </a>
						</div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            @foreach ($menu as $key => $menuItem)
                            <li class="nav-item">
                                <a href="{{ $menuItem['href'] }}" class="nav-link @if (isset($menuItem['children']) && count($menuItem['children']) > 0) dropdown-toggle  @endif active"> {{ $menuItem['text'] }}</a>

                             
                                @if (isset($menuItem['children']) && count($menuItem['children']) > 0)
                                <ul class="dropdown-menu">
                                    @foreach ($menuItem['children'] as $childItem)

                                    <li class="nav-item">
                                        <a href="{{ $childItem['href'] }}" class="nav-link active"> {{ $childItem['text'] }}</a>
                                    </li>
                                    @endforeach

                                </ul>
                                @endif
                            </li>
                        @endforeach
                        </ul>
                      
                    </div>
                </nav>
            </div>
        </div>
    </div>

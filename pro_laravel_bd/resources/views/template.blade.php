<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Fonts googleapis-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body >
<!-- Main navigation -->
@section('headerNav')    
 <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-primary ">
    <div class="container">           
        <!-- site name shown on mobile -->
        <a class="navbar-brand" href="http://127.0.0.1:8000/home"><span>LA</span>BEDETHEQUE</a>
        <!-- Mobile menu toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Mobile Main navigation items -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="http://127.0.0.1:8000/home">
                            Home 
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/mesbd">
                            My comics/BD 
                        </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/mescollections">
                            My collections
                        </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/mesavis">
                            My reviews
                        </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/mesenvies">
                            My wish lists
                        </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@show



<!--   Slider -->
<div class="mt-dis">
    <div class="container">
        <div id="mainCarousel" class="  slide" data-ride="carousel">
            <div class="text-center">
                <div class="carousel-item active">

                      <h3 class="">LA BEDETHEQUE</h3>
                      <h6 class="">@yield('showPageName')</h6>
                  <nav class="navbar mt-dis ">
                        <form class="form-inline">                              
                            <input class="form-control mr-sm-2"   placeholder="Search"  >
                            <button type="button" class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search"></span>Search</button>
                            @csrf
                        </form>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<!--main body  -->

  <main class="mt-dis container-fluid">
        <div class="container">
                @yield('Slide_Home_Bd')
                @yield('OneBd')

                @yield('MesBd')
                @yield('MesCollections') 
                @yield('MesAvis')
                @yield('MesEnvies')
        </div>
</main> 

<!--  footer-->
@section('footerBottom') 
    <footer class="footer     footer-shadow content container-fluid">
        <div class="f ">
               <p class="text-center"><a href="#">MAX</a></p>
        </div>
    </footer>
@show

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jQuery   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!--  Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <!--   Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
 
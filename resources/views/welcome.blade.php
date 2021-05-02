<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Play Live') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
<div id="app">

       <div  id="hero"> 
           <div class="hero-inner">
        <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">tv shows</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">movies</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="#">live</a>
                              </li>
                   
                  </ul>
                  <i class="fas fa-search px-3"></i>
                  <i class="fas fa-bell px-3"></i>
                  <div class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
</div>
                  <div class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
</div>

                </div>
              </nav>
         <!--------hero texts-->
              <div id="hero-text1">
                  <div class="container">
                  <h3><img src="img/netlog-removebg-preview.png"> <span>film</span></h3>
                  <h4>operation varsity blues</h4>
                  <h1>the college</h1>
                  <h2>admission scandal</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consectetur impedit error quod. Distinctio, impedit? At eius ab ipsum aspernatur!</p>
                  <button type="button" class="btn btn-light"> <i class="fas fa-play px-3"></i>Play</button>
                  <button type="button" class="btn btn-secondary"> <i class="fas fa-info-circle px-2"></i>More Info</button>
                </div>
              </div>
              


             <div class="list">
                 <div class="container">
              <h2>my list</h2>
               <div class="row">
                   <div class="col-lg-2 col-6 movie-image">
                        <img src="img/162269731_351990589420451_6592498123666775272_n.jpg" alt="">
                   </div>
                    <div class="col-lg-2 col-6 movie-image ">
                        <img src="img/162841845_290894262402944_4918401789755906166_n.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-6 movie-image ">
                        <img src="img/162537500_466953537682183_5125477379842915749_n.jpg" alt="">
                   </div>
                   <div class="col-lg-2 col-6 movie-image ">
                        <img src="img/162431545_453070332413475_2884958629560078835_n.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-6 movie-image ">
                        <img src="img/162896337_296777911835629_2904659681019261106_n.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-6 movie-image ">
                        <img src="img/162919455_857512258149167_7988636174742915466_n.jpg" alt="">
                    </div>
               </div>
              </div>
             </div>
   </div>
   </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
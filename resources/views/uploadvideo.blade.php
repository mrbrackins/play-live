@extends('layouts.main')
@section('content')

<div id="welcomehero">
<div class="hero-inner">
     
<nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#"><img src="img/playlivelogo.png" alt=""></a>
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

  <div class="container">          
<div id="upload">
<div class="upload-content">
    <i class="fas fa-upload fa-3x"></i>
    <p class="mt-2">drag and drop to upload videos</p>
    <a href="#" class="btn1"> upload</a>
    
    <!--------upload texts -------> 
    <div class="text mt-4">
      <p class="mr-2">Video Format:</p>
      <p>MPEG-2(.mpeg),Windows Media (.wmv),</p>
    </div>
    <div class="text">
      <p class="mr-2"> Minimum Quality:</p>
      <p>872 kbps, 720px wide</p>
    </div>
    <div class="text">
      <p class="mr-2"> Minimum Quality:</p>
      <p>150MB (Best Results under 100MB)</p>
    </div>
    <p class="top-left">759</p>
    <p class="bottom-left">756</p>
    <i class="fas fa-cog top-right"></i>
</div>
</div>
</div>
</div>
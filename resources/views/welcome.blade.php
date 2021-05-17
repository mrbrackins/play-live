@extends('layouts.app')
@section('content')
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

              @endsection
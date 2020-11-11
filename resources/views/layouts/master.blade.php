<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Rushvers1</title>
    <style>
        /* body {
            background-image: url(images/fonfinich.jpg);
        }
        .opacity {
            background: rgba( 0, 0, 0, 0.5);

            margin-left: 0px;
            margin-right: 0px;
            padding-left: 0px;
            padding-right: 0px;
        } */
        .tophead {
            margin-top: 3%;
        }

    </style>
    <link rel="shortcut icon" type="image/svg" href="{{ asset('images/2028205.svg') }}"/>
</head>
<body>    
{{-- nav nav-pills nav-fill --}}
@section('menu')
        
                <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
                <a  class="navbar-brand" href="{{url('about')}}" class="nav-link {{$page === 'About' ? 'active' : ''}}">
                    <img src="{{ asset('images/2028205.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                        RushIn
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class='nav-item'>
                            <a href="{{url('about')}}" class="nav-link {{$page === 'About' ? 'active' : ''}}">About</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{url('service')}}" class="nav-link {{$page === 'Service' ? 'active' : ''}}">Service</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{url('training')}}" class="nav-link {{$page === 'Training' ? 'active' : ''}}">Training</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{url('admin')}}" class="nav-link {{$page === 'Admin' ? 'active' : ''}}">Admin</a>
                        </li>
                    </ul>
                </div>
                </nav>   
                
    @show

    <div class="container-fluid tophead">
        <div class="row">
            <div class="col-12" style="margin: 0; padding: 0;">
                @yield('content')
            </div>
        </div>
    </div>
    
    @section('footer')
        <div class='container-fluid bg-success mt-5 py-3 footer'>
            <div class='row'>
                <div class='col-md-3 text-center'>
                    
                </div>
                <div class='col-md-3 text-center'>
                    
                </div>
                <div class='col-6 col-md-3'>
                    <h6>
                        Contacts
                    </h6>
                    <div class="mb-1">
                        <img src="{{ asset('images/telephone.svg') }}" width="20" height="20" class="d-inline-block align-top" alt="" loading="lazy"> +7 232 132 2323
                    </div>
                    <div>
                        <img src="{{ asset('images/home3.svg') }}" width="20" height="20" class="d-inline-block align-top" alt="" loading="lazy"> 11 Barron Pl, Bossley 2176, Australia
                    </div>
                </div>
                <div class='col-6 col-md-3'>
                    <h6>
                        Social networks
                    </h6>
                    <div class="mb-1">
                    <a href="https://www.instagram.com/">
                        <img src="{{ asset('images/instagram-logo.png') }}" width="20" height="20" class="d-inline-block align-top" alt="" loading="lazy">
                    </a>
                    </div>
                    <div class="mb-1">
                    <a href="https://twitter.com/?lang=ru">
                        <img src="{{ asset('images/twitter.png') }}" width="20" height="20" class="d-inline-block align-top" alt="" loading="lazy">
                    </a>
                    </div>
                    <div class="mb-1">
                    <a href="https://https://www.facebook.com/">
                        <img src="{{ asset('images/facebook.png') }}" width="20" height="20" class="d-inline-block align-top" alt="" loading="lazy">
                    </a>
                    </div>
                </div>
            </div>
            <div class='row mt-3'>
                <div class='col-md-3 text-center'>
                    
                </div>
                <div class='col-md-3 text-center'>
                    
                </div>
                <div class='col-md-3 text-center'>
                   
                </div>
                <div class='col-6 col-md-3'>
                    <h6>RushIn official site. &#169 All rights reserved.</h6>
                </div>
            </div>
        </div>
    @show

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    

</body>
</html>
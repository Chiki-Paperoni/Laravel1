<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="{{ asset('styles/about.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <header id="header">
        <div class="navi">
            <span class="logo">LAGMANI</span>
            <div class="links">
                <span class="link"> <a href="http://localhost/Laravel1/public/main" target="_blank" rel="noopener noreferrer"> Mani</a></span>
                <span class="link"> <a href="http://localhost/Laravel1/public/collection" target="_blank" rel="noopener noreferrer"> Collection</a></span>
                <span class="link">Contacts</span>
            </div>
        </div>
        <div class="photoContainer" style="background: url('./img/photo-2.png') no-repeat center center;background-size: cover;">
            <div id="mainText">The more
                you run,
                the shorter
                the distance.
            </div>
            <div style="width: 50%;"></div>
        </div>
    </header>

    <div class="content">

        <div class="wrapper main">
            <div style="background: url('../public/img/photo-3.png') no-repeat center center;background-size: cover;" class="img"></div>
        </div> 
        <div class="description main">
            <span class="title">Our story</span>
            <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>

        <div class="adapt" style="display: none;">
            <span class="title">Our story</span>
            <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
            <div class="wrapper">
                <div class="img"></div>
            </div> 
            <span class="text">  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="anchors">
                <span class="logo">LAGMANI</span>
                <div class="links">
                    <span>Main</span>
                    <span>Collection</span>
                    <span>Contacts</span>
                </div>
            </div>
            <div class="contacts">
                <img src="../public/img/facebook-2.png" alt="">
                <img src="../public/img/instagram-2.png" alt="">
                <img src="../public/img/youtube-2.png" alt="">
            </div>
        </div>
    </footer>
</body>
</html> -->

@extends('layout.main')

@section('csslink')
<link href="{{ asset('styles/about.css') }}" rel="stylesheet">
@endsection


@section('title','About') 


@section('pagelinks')

<span class="link"> <a href="http://localhost/Laravel1/public/main" target="_blank" rel="noopener noreferrer">Main</a></span>
<span class="link"> <a href="http://localhost/Laravel1/public/collection" target="_blank" rel="noopener noreferrer"> Collection</a></span>

@endsection
@section('about-photo')
    <div class="photoContainer" style="background: url('{{ asset('img/photo-2.png') }}') no-repeat center center;background-size: cover;">
        <div id="mainText">The more
            you run,
            the shorter
            the distance.
        </div>
        <div style="width: 50%;"></div>
    </div>
@endsection    

@section('content')
    <div class="content">

        <div class="wrapper main">
            <div style="background: url('{{ asset('img/photo-3.png') }}') no-repeat center center;background-size: cover;" class="img"></div>
        </div> 
        <div class="description main">
            <span class="title">Our story</span>
            <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>

        <div class="adapt" style="display: none;">
            <span class="title">Our story</span>
            <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
            <div class="wrapper">
                <div class="img"></div>
            </div> 
            <span class="text">  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
    </div>
@endsection    
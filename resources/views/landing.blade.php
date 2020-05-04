<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="{{ asset('styles/landing.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header id="header">
        <div class="navi">
            <span class="logo">LAGMANI</span>
            <div class="links">
                <span class="link"> <a href="http://localhost/Laravel1/public/about" target="_blank" rel="noopener noreferrer">About</a></span>
                <span class="link"> <a href="http://localhost/Laravel1/public/collection" target="_blank" rel="noopener noreferrer"> Collection</a></span>
                <span class="link">Contacts</span>
            </div>
        </div>
        <div class="container">
            <img id="mainPhoto" src="../public/img/photo1.png" alt="">
            <div class="lagmani">
                <span class="s1">LAGMANI</span>
                <span class="s2">The more you run the shorter the distance</span>
                <div id="shop-btn">Shop</div>
            </div>
        </div>
    </header>

    <div class="mainContent">
        <span class="capture">New releases</span>
        <div class="boots">
            <div class="boot">
                <img src="../public/img/air-jordan-8.png" alt="">
                <span class="title">Air Jordan 6 Retro DPM</span>
                <span class="cost">$200</span>
            </div>
            <div class="boot">
                <img src="../public/img/air-jordan-8.png" alt="">
                <span class="title">Air Jordan 6 Retro DPM</span>
                <span class="cost">$200</span>
            </div>
            <div class="boot">
                <img src="../public/img/air-jordan-8.png" alt="">
                <span class="title">Air Jordan 6 Retro DPM</span>
                <span class="cost">$200</span>
            </div>
            <div class="boot">
                <img src="../public/img/air-jordan-8.png" alt="">
                <span class="title">Air Jordan 6 Retro DPM</span>
                <span class="cost">$200</span>
            </div>
            <div class="boot">
                <img src="../public/img/air-jordan-8.png" alt="">
                <span class="title">Air Jordan 6 Retro DPM</span>
                <span class="cost">$200</span>
            </div>
            <div class="boot">
                <img src="../public/img/air-jordan-8.png" alt="">
                <span class="title">Air Jordan 6 Retro DPM</span>
                <span class="cost">$200</span>
            </div>
           
        </div>

        <span class="seeAll">See All</span>
    </div>

    <footer>
        <div class="container">
            <div class="anchors">
                <span class="logo">LAGMANI</span>
                <div class="links">
                    <span>About</span>
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

@section('title','Main')

@section('csslink')
    <link href="{{ asset('styles/landing.css') }}" rel="stylesheet">
@endsection

@section('pagelinks')
    <span class="link"> <a href="http://localhost/Laravel1/public/about" target="_blank" rel="noopener noreferrer">About</a></span>
    <span class="link"> <a href="http://localhost/Laravel1/public/collection" target="_blank" rel="noopener noreferrer"> Collection</a></span>
@endsection

@section('about-photo') 
    <div class="container">
        <img id="mainPhoto" src="../public/img/photo1.png" alt="">
        <div class="lagmani">
            <span class="s1">LAGMANI</span>
            <span class="s2">The more you run the shorter the distance</span>
            <div id="shop-btn">Shop</div>
        </div>
    </div>
@endsection

@section('content')
    <div class="mainContent">
        <span class="capture">New releases</span>
        <div class="boots">
            @for ($i = 0; $i < 6; $i++)
                <div class="boot">
                    <img src="../public/img/air-jordan-8.png" alt="">
                    <span class="title">Air Jordan 6 Retro DPM</span>
                    <span class="cost">$200</span>
                </div>
            @endfor
        </div>
        <span class="seeAll">See All</span>
    </div>
@endsection
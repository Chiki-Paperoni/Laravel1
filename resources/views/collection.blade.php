

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('styles/collection.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header id="header">
        <div class="navi">
            <span class="logo">LAGMANI</span>
            <div class="links">
                <span class="link"> <a href="http://localhost/Laravel1/public/main" target="_blank" rel="noopener noreferrer"> Mani</a></span>
                <span class="link"> <a href="http://localhost/Laravel1/public/about" target="_blank" rel="noopener noreferrer">About</a></span>
                <span class="link">Contacts</span>

                
            </div>
        </div>
    </header>
    <div class="search">
        <span class="capture">Collection</span>
        <input style="background-image: url('../public/img/Untitled.png'); "type="text" placeholder="Search">
    </div>
    <div class="collection">
        <div class="smallFilters" style="display: none;">
            <span class="choosen">New releases</span>
            <i class="fas fa-sliders-h"></i>
        </div>
        <div class="filters">
            <div class="gender type">
                <span class="typename">Gender</span>
                <span class="filter">Women</span>
                <span class="filter">Men</span>
                <span class="filter">Kids</span>
            </div>
            <div class="sports type">
                <span class="typename">Sports</span>
                <span class="filter">Soccer</span>
                <span class="filter">Basketball</span>
                <span class="filter">Running</span>
                <span class="filter">Lifestyle</span>
            </div>
            <div class="price type">
                <span class="typename">Price</span>
                <span class="filter">$20 - $50</span>
                <span class="filter">$50 - $80</span>
                <span class="filter">$80 - $100</span>
            </div>
        </div>
        <div class="boots">

        @foreach ($data as $item) 
            <div class="boot">
                <img src='../public/img/{{$item->img}}' alt="">
                <span class="title">{{ $item->name }}</span>
                <span class="cost">{{ $item->price }}</span>
            </div>
        @endforeach

        </div>
    </div>
    <div class="btn"><div class="showMore">Show more</div></div>
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

@section('title','Collection')

@section('csslink')
    <link href="{{ asset('styles/collection.css') }}" rel="stylesheet">
    <script src="{{ asset('scripts/collection.js') }}"></script>
@endsection

@section('pagelinks')
    <span class="link"> <a href="http://localhost/Laravel1/public/main" target="_blank" rel="noopener noreferrer"> Mani</a></span>
    <span class="link"> <a href="http://localhost/Laravel1/public/about" target="_blank" rel="noopener noreferrer">About</a></span>
    
@endsection

@section('content')
<div class="test">

</div>
<div class="search">
        <span class="capture">Collection</span>
        <input style="background-image: url('../public/img/Untitled.png'); "type="text" placeholder="Search">
    </div>
    <div class="collection">
        <div class="smallFilters" style="display: none;">
            <span class="choosen">New releases</span>
            <i class="fas fa-sliders-h"></i>
        </div>
        <div class="filters">
            <form action="" method="get" style="">
                <input id="genderFilter" type="text" name="gender" value=""/>
                <input id="sportsFilter" type="text" name="sports" value="" />
                <input id="priceFilter" type="text" name="price" value="" />
                <input id="filtersForm" type="submit">
            </form>
            <div class="gender type" id="gender">
                <span class="typename">Gender</span>
                <span class="filter">Women</span>
                <span class="filter">Men</span>
                <span class="filter">Kids</span>
            </div>
            <div class="sports type" id="sports">
                <span class="typename">Sports</span>
                <span class="filter">Soccer</span>
                <span class="filter">Basketball</span>
                <span class="filter">Running</span>
                <span class="filter">Lifestyle</span>
            </div>
            <div class="price type" id="price">
                <span class="typename">Price</span>
                <span class="filter">$20 - $50</span>
                <span class="filter">$50 - $80</span>
                <span class="filter">$80 - $100</span>
            </div>
            <div id="FiltersSubmit">Apply</div>
        </div>
        <div class="boots">

        @foreach ($data as $item) 
            <div class="boot">
                <img src='../public/img/{{$item->img}}' alt="">
                <span class="title">{{ $item->name }}</span>
                <span class="cost">{{ $item->price }}</span>
            </div>
        @endforeach

        </div>
    </div>
    <div class="btn"><div class="showMore">Show more</div></div>
@endsection
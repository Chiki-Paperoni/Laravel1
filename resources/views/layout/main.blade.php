<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('csslink')
    
    
</head>
<body>
    
    <header id="header">
        <div class="navi">
            <span class="logo">LAGMANI</span>
            <div class="links">
                @yield('pagelinks')
                <span class="link">Contacts</span>
            </div>
        </div>
        @yield('about-photo')
    <header>  

    @yield('content')  

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
                <img src="{{asset('img/facebook-2.png')}}" alt="">
                <img src="{{asset('img/instagram-2.png')}}" alt="">
                <img src="{{asset('img/youtube-2.png')}}" alt="">
            </div>
        </div>
    </footer>
</body>
</html>
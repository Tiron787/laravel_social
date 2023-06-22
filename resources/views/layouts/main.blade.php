<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=devaice-width", user-scalable=no, initial-scale=1.0, mximum-scale-1.0>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Document</title>
    </head>
    <body>
       <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{route('main.index')}}">main</a>
                    <a class="nav-item nav-link" href="{{route('post.index')}}">posts</a>
                    <a class="nav-item nav-link" href="{{route('about.index')}}">about</a>
                    <a class="nav-item nav-link" href="{{route('contact.index')}}">contact</a>
                  </div>
                </div>
              </nav>
            <nav>
             
            </nav>
        </div>
       </div>
        @yield('content')
       
    </body>
</html>
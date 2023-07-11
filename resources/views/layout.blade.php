<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title','blog')
    </title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <ul class="nav">
        <li><a class="{{request()->routeIs('home')?'active':''}}" href="{{route('home')}}">Home</a></li>
        <li><a class="{{request()->routeIs('about')?'active':''}}" href="{{route('about')}}">About</a></li>
        
         @auth
    <li><a class="{{request()->routeIs('posts.create')?'active':''}}" href="{{route('posts.create')}}">create a post</a></li>
    <li><a  href="{{route('logout')}}">logout</a></li>
    <li class="username"><p>You are logged in as <b> {{Auth::User()->name}}</b></p></li></li>
    @else  
       <li><a class="{{request()->routeIs('register')?'active':''}}" href="{{route('register')}}">Register</a></li>
       <li><a class="{{request()->routeIs('login')?'active':''}}" href="{{route('login')}}">Login</a></li>
    @endauth    
    
    </ul>

    <div class="main">
@includeWhen($errors->any(),'_errors')


        @if (session('success'))
            
       <div class="flash-success">
        {{(session('success'))}}
       </div>
            
        @endif
        @yield('content')
    </div>
</body>
</html>


@extends('layout')
@section('title','Regiser')
@section('content')

        <h1>Login </h1>
        <form method="POST" action="{{route('login')}}">
           @csrf
            

             <label>Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="@error('email') error-border @enderror">
                @error('email')
                <div class="error">
                    {{$message}}            
                </div>                  
                @enderror

                  <label>Password</label>
            <input type="password" name="password" value="{{old('password')}}" class="@error('password') error-border @enderror">
                @error('password')
                <div class="error">
                    {{$message}}            
                </div>                  
                @enderror

            <button type="submit">Login</button>


            New User ? <a href="{{route('register')}}">Regiser</a>
        </form>
    @endsection
   
@extends('layout')
@section('title','Regiser')
@section('content')

        <h1>Register </h1>
        <form method="POST" action="{{route('register')}}">
           @csrf
            <label>Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="@error('name') error-border @enderror">
                @error('name')
                <div class="error">
                    {{$message}}            
                </div>                  
                @enderror

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

            <button type="submit">Register</button>


            Already Registered ? <a href="{{route('login')}}">Login</a>
        </form>
    @endsection
   
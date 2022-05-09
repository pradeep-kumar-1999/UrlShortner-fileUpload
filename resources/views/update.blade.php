@extends('layouts.apps.default')
@section('content')
<head>
    <title>update</title>
    </head>
<div class="box">
<center>
    <div>
        <h1>update here</h1>
        <form action="{{route('updateshow',['id'=>$data['id']])}}" method="post">
            @csrf
            <div class="container">
            <label for="name">name</label>
            <input type="text" name="name" id="name"  value="{{$data['name']}}" placeholder="update your name"><br>
            <span style="color: red">@error('name'){{$message}}@enderror</span><br><br>
            <label for="emaail">email</label>
            <input type="email" name="email" id="email" value="{{$data['email']}}" placeholder="update your email"><br>
            <span style="color: red">@error('email'){{$message}}@enderror</span><br><br>
            <label for="password">password</label>
            <input type="password" name="password" id="password" value="{{$data['password']}}"  placeholder="update your password"><br>
            <span style="color: red">@error('password'){{$message}}@enderror</span><br><br>
            <button type="submit">update </button><br>
            </div>


        </form>
    </div>
</center>
@endsection

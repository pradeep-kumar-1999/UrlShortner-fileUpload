@extends('layouts.apps.default')
@section('content')
<div class="box">
    <head>
    <title>register</title>
    </head>
<body>

    <center>
        <h1>Registration</h1>
        <form action="{{route('save')}}" method="post">
            @csrf
            <div class="container">
            <label for="name">name</label>
            <input type="text" name="name" id="name" placeholder="enter your name"><br>
            <span style="color: red">@error('name'){{$message}}@enderror</span><br><br>
            <label for="emaail">email</label>
            <input type="email" name="email" id="email" placeholder="enter your email"><br>
            <span style="color: red">@error('email'){{$message}}@enderror</span><br><br>
            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="enter your password"><br>
            <span style="color: red">@error('password'){{$message}}@enderror</span><br><br>
            <button type="submit">sign up</button><br>
            </div>
            <a href="{{route('login')}}">already  have account, login here</a>




        </form>







    </center>






</body>
</div>

</html>
@endsection

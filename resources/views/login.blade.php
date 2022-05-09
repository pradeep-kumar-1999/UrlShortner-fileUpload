@extends('layouts.apps.default')
@section('content')

<head>
    <title>login</title>
    </head>
<body>
    <div class="box">
    <center>
        <h1>Login here</h1>
        <form action="{{route('login')}}" method="post">

            @csrf
            <span style="color: red">@error('invalid')
                {{$message}}
            @enderror</span>
            <div class="imgcontainer">
                <img src="{{URL::asset('/imageFolder/login.jpg')}}" alt="image" class="avatar">
            </div>


            <div class="container">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"><br><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password"><br><br>
                <button type="submit">Login</button><br>
            </div>
            <a href="{{route('register')}}">don't have account, create new</a><br>
        </form>







    </center>




</div>
</body>
</html>
@endsection

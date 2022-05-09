<!DOCTYPE html>
<html>
<head>
    <title>Pheuture</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
          body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #e4d8d8;}
        input[type=url]{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 8px;

        }
        input[type=file]{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 8px;

        }


        #users {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #users td, #users th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #users tr:nth-child(even){background-color: #f2f2f2;}

        #users tr:hover {background-color: #ddd;}

        #users th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #7899ca;
          color: white;
        }
        input[type=submit]{

                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 10%;
                border-radius: 12px;
}
.topnav {
 display: flex;
  background-color: rgb(231, 221, 221);
  justify-content: space-between;
}

.topnav a {
  float: left;
  color: #363333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: rgb(53, 29, 29);
}


.topnav-right {
  display: flex;
}

.select{
    padding: 1vh;
    color: white;
    background-color: #04AA6D;
    border-radius: 5px;
}


        </style>

</head>
<body>

  <div class="container">

    <div class="topnav">
        <h1 style="color: #0529cc">Pheuture</h1>
            <a  href="{{route('showUrl')}}">Link Shortener</a><br>
            <a href="{{route('file')}}">File Upload Service</a>
            <a href="{{route('show')}}"> registered users</a><br>
            <a  href="{{route('logout')}}">logout</a>


    </div>
  </div>

    @yield('content')

</body>
</html>







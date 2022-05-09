<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #e4d8d8;}

        input[type=text],input[type=email], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                border-radius: 8px;

}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 10px;
}
.box{
   width: 600px;
   height: 600px;
   align-self: auto;
   align-content: center;
   margin: auto;

        }
 .container {
    padding: 16px;
}

button:hover {
  opacity: 0.6;
}
form{
    padding: 1rem;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.select{
    padding: 1vh;
    background-color: 04AA6D;
    border-radius: 5px;
}




    </style>
</head>
@yield('content')


</html>

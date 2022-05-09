@extends('layouts.default')
@section('content')

<h2> Upload File</h2>

<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>File</label>
        <input type="file" class="form-control" name="file" id="file"><br>
    </div><br>

    <input type="submit" name="submit" value="Submit" >

</form>
<table id="users">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>path</th>

            <th>created_at</th>
            <th>updated_at</th>
            <th>action</th>

        </tr>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['path']}}</td>
                <td>{{$item['created_at']}}</td>
                <td>{{$item['updated_at']}}</td>
                <td>
                    <a href="{{route('download',['id'=>$item['id']])}}" download>download</a>
                    &nbsp
                    <a href="{{route('deletefile',['id'=>$item['id']])}}">delete</a>
            </td>

            </tr>

            @endforeach
        </tbody>
    </thead>


</table>
@endsection




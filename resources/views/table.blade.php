@extends('layouts.default')
@section('content')
<head>

<table id="users">
<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>action</th>
    </tr>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['password']}}</td>
            <td>{{$item['created_at']}}</td>
            <td>{{$item['updated_at']}}</td>
            <td>
                <form action="{{route('delete',['id'=>$item['id']])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Delete</button>


                </form>

                <a href="{{route('update',['id'=>$item['id']])}}">update</a>

            </td>
        </tr>

        @endforeach
    </tbody>
</thead>



</body>
</table>
@endsection


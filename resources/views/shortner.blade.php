@extends('layouts.default')
@section('content')





        <form method="POST" action="{{route('makeUrl')}}">
            @csrf
            <div >
              <input type="url" name="url"   placeholder="Enter URL">

              <input type="submit" value="shorten">


        </form>
      </div>
      <div>


   <pre>
            <table id="users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Original url</th>
                        <th>code & ShortnedUrl   </th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($data as $item)
                       <tr>
                           <td>{{$item['id']}}</td>
                           <td>{{$item['url']}}</td>
                           <td>{{$item['code']}}   <a href="http://127.0.0.1:8000/gen/{{$item['code']}}" target="_blank">http://127.0.0.1:8000/gen/{{$item['code']}}</a></td>
                           <td><a href="{{route('deleteUrl',['id'=>$item['id']])}}">delete</a></td>
                       </tr>

                   @endforeach


                </tbody>
            </table>
      </div>





@endsection


<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\link;

class linkcontroller extends Controller
{
    public function make(Request $request)
    {
        $id = Auth::id();
        $data=$request->validate([
            'url'=>'required|max:255',
        ]);

        $code = Str::random(3);

        link::create([
            'user_id'=>$id,
            'url'=>$data['url'],
            'code'=>$code,
        ]);

        return redirect(route('showUrl'));
    }


    public function showUrl(){
        $id = Auth::id();
        $data = link::where('user_id',$id)->get();
        return view('shortner',['data'=>$data->toArray(),'select'=>'url']);
    }

    public function redirectUrl($str){
        $data = link::where('code',$str)->get();
        $data = $data->toArray();
        return redirect($data[0]['url']);
    }
    public function deleteUrl($id){
        link::find($id)->delete();
        return redirect(route('showUrl'));

    }




}

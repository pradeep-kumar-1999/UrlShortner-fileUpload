<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\file;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class FileController extends Controller
{
    public function file(){
        $id=Auth::id();
        $data=file::where('user_id',$id)->get();
        return view('file',['data'=>$data->toArray(),'select'=>'file']);
    }

    public function store(Request $request){
        $id=Auth::id();
        $data=$request->validate([
            'file' => 'required'
        ]);
        $str=Str::random(4);
        $path=Storage::putFileAs('/',$data['file'],$str.$data['file']->getClientOriginalName());
        file::create([
            'user_id'=>$id,
            'name'=>$data['file']->getClientOriginalName(),
            'path'=>$str.$data['file']->getClientOriginalName()


        ]);
        return redirect(route('file'));
    }
    public function download($id){
        $path=file::find($id);
        $data=Storage::download(
            $path['path'],
            $path['name']);
        return $data;

    }

    public function deletefile($id){
        $data = file::find($id);
        Storage::delete($data["path"]);
        file::find($id)->delete();

        return redirect(route('file'));
    }










}

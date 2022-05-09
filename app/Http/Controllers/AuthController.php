<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\ShortLink;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginShow(){
        return view('login',['select'=>'login']);
    }

     public function login(Request $req){
        $data=$req->validate([
            'email'=>'required|',
            'password'=>'required'
        ]);



        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            $req->session()->regenerate();
            return redirect()->intended(route('showUrl'));
        }

        return back()->withErrors([
            'invalid'=>'user does not exist '
        ]);

     }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->Invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }

    public function register(){
        return view('register',['select'=>'register']);
    }

    public function save(Request $request){
        $data=$request->validate([
            'name'=>'required|max:20',
            'email'=>'required|email|unique:admins|max:30',
            'password'=>'required|max:12|min:8'
        ]);

        $password = Hash::make($data['password']);


      $created=User::create([
          'name'=>$data['name'],
          'email'=>$data['email'],
          'password'=>$password,
      ]);
      return redirect(route('show'));


    }



    public function show(){
        $data=User::all();
            return view('table',['data'=>$data]);
        }
        public function delete($id){
            User::find($id)->delete();
            return redirect(route('show'));
        }
        public function update(Request $request,$id){
            $data=$request->Input();
            User::where('id',$id)->update([
                'name'=>$data['name'],
                 'email'=>$data['email'],
                 'password'=>$data['password'],

            ]);
            return redirect(route('show'));
        }
        public function updateshow($id){
            $data=User::find($id);
            return view('update',['data'=>$data]);
        }






    }




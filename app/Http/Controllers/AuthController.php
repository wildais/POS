<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        //ambil data user
        $user = Auth::user();

        if($user){
            if($user->level_id == '1'){
                return redirect()->intended('admin');
            }
            else if($user->level_id == '3'){
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        //validasi saat klik
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('username','password');

        if (Auth::attempt($credential)){
            $user = Auth::user();

            if($user->level_id == '1'){
               return redirect()->intended('admin');
            }
            else if($user->level_id == '3'){
                return redirect()->intended('manager');
            }

            //return redirect()->intended('/');
        }
        else{
            return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Pastikan data user benar']);
        }

    }

    public function register(){
        return view('register');
    }

    public function proses_register(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        UserModel::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request){
        $request->session()->flush();

        Auth::logout();

        return Redirect('login');
    }
    
}
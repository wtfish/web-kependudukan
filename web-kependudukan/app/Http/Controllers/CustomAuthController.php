<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('Auth.login',[
            "title"=>"Penduduk Meninggal"
        ]);
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');

        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('Auth.registration',[
            "title"=>"Registrasi"
        ]);
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard");//->withSuccess('have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login");//->withSuccess('are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}

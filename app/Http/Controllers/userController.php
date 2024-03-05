<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\transaction;


class userController extends Controller
{

    public function portfolio(){

        return view('master.Portfolio');
    }
    
   public function index(){

    return view('login.index');

   }

   public function register(){
    return view('login.register');
   }

   public function storeRegister(Request $request){

    $validatedData = $request->validate([
        'username' => 'required|unique:users|max:255',
        'password' => 'required|min:6',
        'name' => 'required|max:255',
        'email' => 'required|max:255',
 
    ]);

   

        // Attempt to create a new user record
        $user = new User();
        $user->username = $validatedData['username'];
        $user->password = bcrypt($validatedData['password']); // Hash the password
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();


        return redirect()->route('login');

   }

 
   public function logins(Request $request)
   {
       $username = $request->input('username');
       $password = $request->input('password');
   
       $credentials = [
           'username' => $username,
           'password' => $password, // Do not hash the password here
       ];
     
       if (Auth::attempt($credentials)) {
           session(['name' => Auth::user()->name]);
          
           $id = Auth::user()->id;



           return redirect()->intended('dashboard');
       }
   
       return back()->withErrors(['email' => 'Invalid credentials']);
   }

   public function logout()
   {
       Auth::logout();
   
       return redirect()->route('login')->with('message', 'You have been logged out.');
   }
   
   
}
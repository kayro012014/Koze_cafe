<?php

namespace App\Http\Controllers;

use App\Models\User; // Import User model
use Illuminate\Http\Request; // Import Request
use Illuminate\Support\Facades\Hash; // Import Hash for password hashing
use Illuminate\Support\Facades\Validator; // Import Validator for validation
use Illuminate\Support\Facades\Auth; // Import Auth for authentication

class UserController extends Controller
{
   public function login(){
       return view('login');
   }

   public function loginvalidate(Request $request){
       // Validation rules for login form
       $request->validate([
           'email' => 'required|email', // Validate that email has proper format
           'password' => 'required|min:6' // Validate password has minimum length
       ]);

       $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
           // If authentication is successful
           return redirect('dashboard')->withSuccess('Login successful');
       }

       // If authentication fails
       return back()->withErrors([
           'email' => 'The provided credentials do not match our records.', // Attach error to email field
       ])->withInput(); // Keep the input except the password for security
   }

   public function register(){
       return view('register');
   }

   public function registervalidate(Request $request){
       // Validation rules for register form
       $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:8'
       ]);

       // Gather validated data
       $data = $request->all();
       
       // Call create method to create the user
       $this->create($data);

       // Redirect to login with success message
       return redirect('login')->withSuccess('Registration successful. Please sign in.');
   }

   // Create a new user and hash the password
   public function create(array $data){
       return User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => Hash::make($data['password']) // Hash the password
       ]);
   }
}

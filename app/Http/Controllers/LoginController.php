<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'user_name' => ['required', 'user_name'],
            'password' => ['required']
        ]);

        if (Auth::attempt($request->only('user_name', 'password'))){
            return response()->json(Auth::user(), 200);
        }
       
    }
    public function logout()
    {
        Auth::logout();
    }
}
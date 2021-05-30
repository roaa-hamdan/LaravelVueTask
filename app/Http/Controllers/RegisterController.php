<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
echo('ewrew');
class RegisterController extends Controller
{
    public function register(Request $request)
    {
       
        $request->validate([
            'user_name' => ['required'],
            'password' =>['required', 'min:6', 'confirmed']
        ]);

        Users->save([
            'user_name' => $request->name,
            'password' => Hash::make($request->password)
        ]);
    }
}

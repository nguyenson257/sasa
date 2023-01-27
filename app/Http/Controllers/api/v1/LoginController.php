<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function login(Request $request)
    {
        $dataCheckLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(auth()->attempt($dataCheckLogin)){
            return response()->json([
                'message' => 'login successful',
                'status_code' => 200,
            ]);
        }
        return response()->json([
            'message' => 'login fails',
            'status_code' => 404,
        ]);
    }

}

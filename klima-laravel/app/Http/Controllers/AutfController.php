<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AutfController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Info message - ' => $validator->errors()
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $regToken = $user->createToken('TokenR')->plainTextToken;

        return response()->json([
            'Info user - ' => $user,
            'Info reg token - ' => $regToken
        ]);
    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Info message - ' => $validator->errors()
            ]);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['Info message - ' => 'Uneli ste pogresan email ili password!']);
        } else {
            $tokenL = $user->createToken('tokenL')->plainTextToken;

            return response()->json([
                'Info user - ' => $user,
                'Info login token - ' => $tokenL
            ]);
        }
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'Info message - ' => 'Logout je uspesan!'
        ]);
    }
}

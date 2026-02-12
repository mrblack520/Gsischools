<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(Request $request)
    {

        // $request->validated([
        //     'email' => ['required', 'string', 'email'],
        //     'password' => ['required', 'string', 'min:6'],
        // ]);

        $email = $request->username;
        $password = $request->password;

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            return $this->error('', 'Credentials do not matched', 401);
        }

        $user = User::where('email', $email)->first();
        if ($user->photo) {
            $user->photo = asset($user->photo);
        }

        return $this->success([
            'user' => $user,
            'session' => session()->all(),
            'token' => $user->createToken('API Token of ' . $user->name)->plainTextToken
        ]);
    }
}

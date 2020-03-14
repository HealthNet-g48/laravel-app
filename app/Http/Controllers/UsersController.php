<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class UsersController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getUser(Request $request)
    {
        $this->validate($request, ['token' => 'required']);
        $user = JWTAuth::user();
        return response()->json($user);
    }
}

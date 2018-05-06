<?php

namespace App\Api\V1\Controllers;

use App\Helpers\ApiResponse;
use Config;
use App\User;
use Illuminate\Http\JsonResponse;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\SignUpRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SignUpController extends Controller
{
    /**
     * @param SignUpRequest $request
     * @param JWTAuth $JWTAuth
     * @return \Illuminate\Http\JsonResponse
     */
    public function signUp(SignUpRequest $request, JWTAuth $JWTAuth): JsonResponse
    {
        $user = new User($request->all());
        if(!$user->save()) {
            throw new HttpException(500);
        }

        if(!Config::get('boilerplate.sign_up.release_token')) {
            return ApiResponse::response(201, 'Ok');
        }

        $token = $JWTAuth->fromUser($user);
        return ApiResponse::response(201, 'Ok', ['token' => $token]);
    }
}

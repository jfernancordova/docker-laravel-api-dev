<?php

namespace App\Api\V1\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\JsonResponse;

class LogoutController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', []);
    }

    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(): JsonResponse
    {
        Auth::guard()->logout();
        ApiResponse::response(200, 'Ok', ['message' => 'Successfully logged out']);
    }
}

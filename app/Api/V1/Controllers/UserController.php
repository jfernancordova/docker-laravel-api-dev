<?php

namespace App\Api\V1\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:api', []);
    }

    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile(){
        return ApiResponse::response(200, 'Ok', Auth::guard()->user());
    }
    
}

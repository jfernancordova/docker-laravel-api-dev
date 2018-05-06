<?php

namespace App\Api\V1\Controllers;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Auth;

class RefreshController extends Controller
{
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        $token = Auth::guard()->refresh();

        return ApiResponse::response(200, 'Ok',
            ['token' => $token, 'expires_in' => Auth::guard()->factory()->getTTL() * 60]);

    }
}

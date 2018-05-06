<?php
namespace App\Helpers;
use Illuminate\Http\JsonResponse;

class ApiResponse
{
    /**
     * @param string $code
     * @param string $message
     * @param null $response
     * @return \Illuminate\Http\JsonResponse
     */
    public static function response(string $code, string $message, $response = null): JsonResponse
    {
        return response()->json(['status' => $message, 'response' => $response], $code);
    }
}
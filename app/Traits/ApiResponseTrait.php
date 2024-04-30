<?php

namespace App\Traits;

trait ApiResponseTrait
{
    /**
     * Based on https://github.com/omniti-labs/jsend
     */
    public function sendResponse($data = null, $responseMessage = null, $statusCode = 200)
    {
        $response = [];

        if ($statusCode === 200 or $statusCode === 204) {
            $response['data'] = $data;
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['message'] = $responseMessage;
        }

        return response()->json($response, $statusCode);
    }
}

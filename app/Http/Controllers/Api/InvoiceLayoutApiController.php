<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Layout;
use App\Traits\ApiResponseTrait;
use Error;

class InvoiceLayoutApiController extends Controller
{
    use ApiResponseTrait;
    public function index(string $id)
    {
        try {
            $layout = Layout::find($id);

            return $this->sendResponse(['layout' => $layout]);
        } catch (Error $e) {
            return $this->sendResponse(null, 'fail', 500);
        }
    }
}

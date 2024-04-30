<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Layout;

class InvoiceLayoutController extends Controller
{
    public function index(string $id): Response
    {

        $layout = Layout::find($id);

        return Inertia::render('InvoiceLayout/Layout', [
            'layout' => $layout,
        ]);
    }
}

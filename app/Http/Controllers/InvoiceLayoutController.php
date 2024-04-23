<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

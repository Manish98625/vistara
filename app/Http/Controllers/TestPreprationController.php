<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\View\View;
use Illuminate\Http\Response;

class TestPreprationController extends Controller
{
     public function show(): View|Response
    {
        $service = Services::findOrFail(2);

        return view('frontend.services.test-preparation', [
            'service' => $service
        ]);
    }
}
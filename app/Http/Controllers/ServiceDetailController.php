<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\View\View;
use Illuminate\Http\Response;

class ServiceDetailController extends Controller
{
    public function show($id): View|Response
    {
        $service = Services::with('serviceDiscription')->findOrFail($id);

        $servicediscp = $service->serviceDiscription;

        return view('frontend.services.show', [
            'service' => $service,
            'servicediscp' => $servicediscp
        ]);
    }
}

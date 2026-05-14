<?php

namespace App\Http\Controllers;

use App\Models\Services;

class ServiceDetailController extends Controller
{
    public function show($id)
    {
        $service = Services::with('serviceDiscription')->findOrFail($id);

        $servicediscp = $service->serviceDiscription;

        return view('frontend.services.show', [
            'service' => $service,
            'servicediscp' => $servicediscp
        ]);
    }
}

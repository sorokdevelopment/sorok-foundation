<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use Illuminate\Http\Request;

use App\Services\PisopayCallbackServices;

class PaymentController extends Controller
{
    /**
     * Handle the incoming request.
     * @param Request $request
     * @param PisopayCallbackServices $callbackService
     */
    public function __invoke(Request $request, PisopayCallbackServices $callbackService)
    {
        $data = $request->input('data');

        if (!$data || !$callbackService->handle($data)) {
            return response()->json(['message' => 'Invalid callback'], 403);
        }

        return response('OK', 200);
    }

}

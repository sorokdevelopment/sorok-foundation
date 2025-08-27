<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
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

        Log::info('PisoPay Callback Raw Data', $request->all());

        $data = $request->input('data');

        if (!$data) {
            Log::warning('PisoPay callback missing data field.');
            return response()->json(['message' => 'Missing data field'], 400);
        }

        try {
            $processed = $callbackService->handle($data);

            if (!$processed) {
                Log::error('PisoPay callback failed to process', ['data' => $data]);
                return response()->json(['message' => 'Callback not processed'], 422);
            }

            return response('OK', 200);
            
        } catch (\Throwable $e) {
            Log::error('PisoPay callback error', [
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);
            return response()->json(['message' => 'Server error'], 500);
        }
    }

}

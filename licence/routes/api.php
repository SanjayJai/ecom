<?php

use Illuminate\Http\Request;
use App\Models\License;

Route::get('/verify', function (Request $request) {
    $license = License::where('license_key', $request->license_key)->first();

    if (!$license) {
        return response()->json(['status' => 'invalid'], 404);
    }

    if ($license->domain && $license->domain !== $request->domain) {
        return response()->json(['status' => 'domain_mismatch'], 403);
    }

    if ($license->expires_at && now()->greaterThan($license->expires_at)) {
        return response()->json(['status' => 'expired'], 403);
    }

    if ($license->status !== 'active') {
        return response()->json(['status' => 'inactive'], 403);
    }

    return response()->json(['status' => 'valid']);
});


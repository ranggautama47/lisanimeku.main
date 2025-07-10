<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;

class TopupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'channel' => 'required|string',
            'coin_amount' => 'required|integer',
            'price' => 'required|integer',
        ]);

        $coin = Coin::create([
            'channel' => $request->channel,
            'coin_amount' => $request->coin_amount,
            'price' => $request->price,
            'popup_type' => $this->getPopupType($request->channel),
            'qris_channel' => $this->getQrisChannel($request->channel),
        ]);

        return response()->json([
            'success' => true,
            'order_id' => $coin->id,
            'expires_at' => now()->addMinutes(15),
             'qr_code_url' => "/asset/qrcode/{$coin->id}.png", // ← QR
            'qr_code_url' => "/asset/qris/logo-{$coin->channel}.png",
        ]);
    }

    private function getPopupType($channel)
    {
        $map = [
            'dana' => 'qr',
            'gopay' => 'qr',
            'shopeepay' => 'qr',
            'bank' => 'bank',
            'kartukredit' => 'credit_card',
        ];
        return $map[$channel] ?? 'qr';
    }

    private function getQrisChannel($channel)
    {
        $map = [
            'dana' => 'logo-dana',
            'gopay' => 'logo-gopay',
            'shopeepay' => 'logo-shopeepay',
        ];
        return $map[$channel] ?? null;
    }
}

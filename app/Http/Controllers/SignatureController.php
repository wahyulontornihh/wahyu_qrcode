<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signature;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SignatureController extends Controller
{
    public function createSignature(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email|unique:signatures',
        ]);

        // Simulasi data tanda tangan unik
        $signatureData = hash('sha256', $request->email . now());

        // Simpan ke database
        $signature = Signature::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'signature_data' => $signatureData
        ]);

        return response()->json([
            'message' => 'Signature created successfully',
            'qr_code' => url('/signature/qrcode/' . $signature->id)
        ]);
    }

    public function generateQRCode($id)
    {
        $signature = Signature::findOrFail($id);
        $qrCode = QrCode::size(200)->generate($signature->signature_data);

        return response($qrCode)->header('Content-Type', 'image/png');
    }
}

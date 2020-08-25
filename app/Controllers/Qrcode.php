<?php namespace App\Controllers;

class Qrcode extends BaseController
{
	public function index()
	{
	    $data  = [
            'keyword' => 'QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality. Get your free QR Codes now!',
            'description' => 'QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality. Get your free QR Codes now!',
            'title' => 'QR Code Generator | Create Your Free QR Codes'
        ];

		return view('qrcode/index', $data);
	}
}

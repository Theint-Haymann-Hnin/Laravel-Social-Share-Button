<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialShareController extends Controller
{
    public function shareButtons()
    {
        $data = "testing";
        $socialShares = \Share::page(
            $data,
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('posts', compact('socialShares'));
    }
}

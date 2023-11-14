<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productLogos = [
            'softaculous' => 'images/landingPage/logo_product/softaculous.svg',
            'wordpress' => 'images/landingPage/logo_product/wordpress.svg',
            'cloudflare' => 'images/landingPage/logo_product/cloudflare.svg',
            'cpanel' => 'images/landingPage/logo_product/cpanel.svg',
            'imunify' => 'images/landingPage/logo_product/imunify.svg',
            'litespeed' => 'images/landingPage/logo_product/litespeed.svg',
        ];

        return view('Home', ['listLogo' => $productLogos]);
    }
}


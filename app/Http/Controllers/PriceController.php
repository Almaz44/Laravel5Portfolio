<?php

namespace App\Http\Controllers;

use Request;

class PriceController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Цены',
            'description' => 'Цены на наши услуги'
        ];
        
        $data['breadcrumbs'] = Request::get('breadcrumbs');
        
        return view('pricingbox', $data);
    }
}

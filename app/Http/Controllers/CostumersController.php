<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Facades\Http;

class CostumersController extends Controller
{
    public function index()
    {
        $API = \env('API_URL');
        $getCustomer = Http::get($API.'/customer');
        if ($getCustomer->successful()) {
            $customer = $getCustomer->json();
        } else {
            $customer = [];
        }

        $customer = $customer['data'];
        return view('admin.costumer.index', ['family' => $customer]);
    }
}

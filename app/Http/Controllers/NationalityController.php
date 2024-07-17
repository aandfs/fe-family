<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Facades\Http;

class NationalityController extends Controller
{
    public function index()
    {
        $API = \env('API_URL');
        $getNationality = Http::get($API.'/nationality');
        if ($getNationality->successful()) {
            $nationalities = $getNationality->json();
        } else {
            $nationalities = [];
        }

        $nationalities = $nationalities['data'];
        return view('admin.nationality.index', ['nationalities' => $nationalities]);
    }
}

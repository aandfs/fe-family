<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Facades\Http;

class FamilyListController extends Controller
{
    public function index()
    {
        $API = \env('API_URL');
        $getfamilylist = Http::get($API.'/familylist');
        if ($getfamilylist->successful()) {
            $familyList = $getfamilylist->json();
        } else {
            $familyList = [];
        }

        $familyList = $familyList['data'];
        return view('admin.family.index', ['family' => $familyList]);
    }
}

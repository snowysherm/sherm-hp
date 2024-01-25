<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MedalController extends Controller
{
    public function index()
    {
        return view('medal.index');
    }

    public function fetchClip() {
        $response = Http::withHeaders([
            'Authorization' => 'pub_SAZBDxGFLxdcP6WfkZz72jddrvThqn3n',
        ])->get('https://developers.medal.tv/v1/trending', [
            'categoryId' => 62,
            'limit' => 1
        ]);

        $jsonResponse = $response->json();
        return $jsonResponse['contentObjects'][0];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MedalController extends Controller
{
    public function index()
    {
        return view('medal.index');
    }

    public function fetchClip()
    {
        $categoryId = 165;
        $userId     = 50766636;

        $params = ['limit' => 10];

        if ($categoryId) {
            $params['categoryId'] = $categoryId;
        }
        if ($userId) {
            $params['userId']     = $userId;
        }

        $response = Http::withHeaders([
            'Authorization' => 'pub_gYGBoIPUjWrqNScWK2wuIS8jLgmRwVfR',
        ])->get('https://developers.medal.tv/v1/latest', $params);

        $jsonResponse = $response->json();
        $clips        = $jsonResponse['contentObjects'];

        return view('medal.index', compact('clips'));
    }
}

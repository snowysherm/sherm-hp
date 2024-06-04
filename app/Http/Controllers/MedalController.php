<?php

namespace App\Http\Controllers;

use App\Http\Services\MedalApiService;

class MedalController extends Controller
{
    public function index()
    {
        return view('medal.index');
    }

    public function fetchClip()
    {
        $medalApiService = new MedalApiService(apiKey: config('variables.MEDAL_API_KEY'), categoryId: 165, userId: 50766636);
        $clips           = $medalApiService->returnClips();

        return view('medal.index', compact('clips'));
    }
}

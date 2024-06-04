<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class MedalApiService
{
    public string $apiKey;
    public int $categoryId;
    public int $userId;
    public int $clipLimit;

    public function __construct(string $apiKey, int $categoryId = null, int $userId = null, int $clipLimit = 10)
    {
        $this->apiKey     = $apiKey;
        $this->categoryId = $categoryId;
        $this->userId     = $userId;
        $this->clipLimit  = $clipLimit;
    }

    public function returnClips()
    {
        $params = ['limit' => $this->clipLimit];

        if ($this->categoryId) {
            $params['categoryId'] = $this->categoryId;
        }
        if ($this->userId) {
            $params['userId'] = $this->userId;
        }

        $response = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->get('https://developers.medal.tv/v1/latest', $params);

        $jsonResponse = $response->json();

        return $jsonResponse['contentObjects'];
    }

}

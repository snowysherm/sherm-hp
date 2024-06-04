<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class GithubCodeFetchService
{
    public string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function returnFileContent(): bool|string
    {
        $request = Http::withHeaders(['Authorizazion' => config('GITHUB_ACCESS_TOKEN',)])->get(
            'https://api.github.com/repos/snowysherm/sherm-hp/contents/' . $this->filePath,
        );

        if (! $request->successful()) {
            return 'Can\'t connect to GitHub API';
        }

        $returnResponse = $request->json();

        return base64_decode($returnResponse['content']);
    }

}

@php
    use Illuminate\Support\Facades\URL;
@endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sherm</title>
    <div class="title">
        <a href="{{ route('home.index') }}" class="unstyled-link"><h1>sherm</h1></a>
        <p>because everyone needs a sherm in their life</p>
    </div>
</head>
<body>
<div class="nav">
    <ul>
        <li><a href="{{ route('home.index') }}" class="{{ Route::currentRouteName() === 'home.index' ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('medal.index') }}" class="{{ Route::currentRouteName() === 'medal.index' ? 'active' : '' }}">Medal Clips</a></li>
    </ul>
</div>

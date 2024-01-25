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
        <h1>sherm</h1>
        <p>because everyone needs a sherm in their life</p>
    </div>
</head>
<body>

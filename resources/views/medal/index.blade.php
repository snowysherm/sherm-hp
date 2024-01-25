@include('templates.header')
@foreach($clips as $clip)
    {!! $clip['embedIframeCode'] !!}
@endforeach

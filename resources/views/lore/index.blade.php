@include('templates.header')
<div>
    <button class="button">
        <a class="unstyled-link" href="{{ route('lore.edit') }}">Neu</a>
    </button>
</div>
@foreach($lores as $lore)
    <div class="post container">
        <h2>{{ $lore->title }} Autor: {{ $lore->author()->first()->name }}</h2>
        <p>{{ $lore->content }}</p>
        <button class="button button-delete">
            <a class="unstyled-link" href="{{ route('lore.delete', $lore) }}">Löschen</a>
        </button>
    </div>
@endforeach

@include('templates.footer')

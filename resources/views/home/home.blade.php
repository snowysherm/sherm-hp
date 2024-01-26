@include('templates.header')
<div>
    <button class="button">
        <a class="unstyled-link" href="{{ route('home.edit') }}">Neu</a>
    </button>
</div>
@foreach($posts as $post)
    <div class="post container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->post }}</p>
    </div>
    <div>
        <button class="button button-delete">
            <a class="unstyled-link" href="{{ route('home.delete', $post) }}">Löschen</a>
        </button>
    </div>
@endforeach

@include('templates.footer')

@include('templates.header')
<a href="{{ route('home.edit') }}">Neu</a>
@foreach($posts as $post)
    <div class="post container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->post }}</p>
    </div>
@endforeach

@include('templates.footer')

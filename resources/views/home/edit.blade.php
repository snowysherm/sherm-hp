@include('templates.header')

<h2>New Post</h2>

<form method="POST" action="{{ route('home.store') }}">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br><br>
    <label for="post">Post:</label><br>
    <textarea id="post" name="post"></textarea><br><br>
    <input class="button" type="submit" value="Submit">
</form>

@include('templates.footer')

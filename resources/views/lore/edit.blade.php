@include('templates.header')

<h2>New lore entry</h2>

<form method="POST" action="{{ route('lore.store') }}">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br><br>
    <label for="contents">Content:</label><br>
    <textarea id="contents" name="contents"></textarea><br><br>
    <input class="button" type="submit" value="Submit">
</form>

@include('templates.footer')

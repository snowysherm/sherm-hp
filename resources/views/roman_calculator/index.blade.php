@include('templates.header')

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red">{{ $error }}</p>
    @endforeach
@endif

<form method="POST" action="{{ route('romanCalculator.calculate') }}">
    @csrf
    <label for="decimal">Dezimal Eingabe von 1-1000:</label><br>
    <input type="text" id="decimal" name="decimal"><br><br>
    <input class="button" type="submit" value="Submit">
</form>

@if(! empty($romanNumber))
    Römische Zahl:
    {{ $romanNumber }}
@endif

<p>View my Code for this "Project" (Via GitHub API):</p>
<pre>{!! nl2br(e($romanCalculatorCode)) !!}</pre>

@include('templates.footer')

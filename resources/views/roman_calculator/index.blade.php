@include('templates.header')

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

@include('templates.footer')

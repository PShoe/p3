@extends('layouts.masterView')

@section('content')
<h2>This should be the lorem create page</h2>

<p>
<form method="post" action="/lorem" value=''>

    <p class='loremForm'>
        <label for="howManyParas">How many Paragraphs?</label>
        <br>
        <input type='number' name='howManyWords' id='howManyWords'>
        <br>
        <input class='button' type="submit"  value='Lorem-Ipsum Me!'>
    </p>
</form>
</p>

@endsection

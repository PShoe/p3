@extends('layouts.masterView')

@section('content')
<h2>How many Lorem-ipsum paragraphs do you need?</h2>
<p>
<form method="POST" action="/lorem">
    {{ csrf_field() }}
    <p class='loremForm'>
        <label for="howManyParas">How many Paragraphs? (Max of 20)</label>
        <br>
        <input type='number' name='howManyParas'>
        <br>
        <input class='button' type="submit"  value='Lorem-Ipsum Me!'>
    </p>
</form>
</p>
@endsection

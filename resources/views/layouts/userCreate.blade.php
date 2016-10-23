@extends('layouts.masterView')

@section('content')
<h2>Create some users!</h2>

<form method="POST" action="/user">
    {{ csrf_field() }}
    <p class='userform'>
        <label for="howManyUsers">How many? (max of 50)</label>
        <br>
        <input type='number' name='howManyUsers'>
        <br>
        <input type='checkbox' name='add_birthday'>
        <label for='add_birthday'>Add birthdays?</label>
        <br>
        <input type='checkbox' name='add_address'>
        <label for='add_address'>Include Address?</label>
    </p>
    <input class='button' type="submit"  value='Users please!'>
</form>

@endsection

@extends('layouts.masterView')

@section('content')
<h2>This should be the user create page</h2>

<form method="post" action="/user" value=''>


    <p class='userform'>
        <label for="howManyUsers">How many users?</label>
        <br>
        <input type='number' name='howManyWords' id='howManyWords'>
        <br>
        <input type='checkbox' name='add_birthday' id='add_birthday' >
        <label for='add_birthday'>Add birthdays?</label>
        <br>
        <input type='checkbox' name='add_profile' id='add_profile' >
        <label for='add_profile '>Include Profiles?</label>
    </p>
    <input class='button' type="submit"  value='Users please!'>


</form>

@endsection

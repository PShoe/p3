@extends('layouts.masterView')

@section('content')
<h2>Check out your new users:</h2>
<p>{!! nl2br(e($data)) !!}</p>
<a href= "/user/create"><input class='button' type="submit"  value='Generate users again'></a>
@endsection

@extends('layouts.masterView')

@section('content')
<h2>Look at your lorem!</h2>
<p>{!! nl2br(e($paragraphs)) !!}</p>
<a href="lorem/create"><input class='button' type="submit"  value='Generate more text'></a>
@endsection

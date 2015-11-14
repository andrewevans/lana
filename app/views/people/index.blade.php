@extends('layouts.master')

@section('content')

<div class="container">

@foreach($people as $person)

<h1><a href="{{ $person->url() }}">{{ $person->alias }}</a></h1>

<p>{{ $person->meta_description }}<br />
    <a href="{{ $person->url() }}">Read more</a></p>

@endforeach

</div>

@stop
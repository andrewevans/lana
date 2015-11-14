@extends('layouts.master')

@section('content')

<h1>{{ $person->alias }}</h1>

<p>{{ $person->meta_description }}</p>

@stop
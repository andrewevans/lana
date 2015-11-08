@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $page_title }}</h1>
            <p>{{ $page_description }}</p>
        </div>
    </div>
    <div class="row">
        @include('widgets.posts', array('filter' => $slug))
    </div>
</div>

@stop

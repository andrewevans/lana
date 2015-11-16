@extends('layouts.master')

@section('content')

<div class="container">
    <h1>{{ $post->post_title }}</h1>

    {{ apply_filters('the_content',$post->post_content); }}
</div>

@stop

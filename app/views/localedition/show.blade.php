@extends('layouts.master')

@section('content')

<div class="container">
    <h1>{{ $post->post_title }}</h1>

    <!-- Note: This is an altered version of an original post. -->
    {{ apply_filters('the_content',$local_edition_post); }}
</div>

@stop

@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="headline"><span class="black">"We can't keep bailing out
                    Wall St" :</span><span class="white">: Voted Bailout (2008),
                Endorses TPP</span></h3>
        </div>
        <div class="col-md-6">
            <p class="tagline">Rhetoric against and actions in favor of historically
            dangerous investment banking continue to rise.</p>
            <p>A classic Aboutface reads like an ironic haiku; it doesn't always
            make sense, but it follows a set timeless pattern. When investors woke up
            on the morning in late 2008, it was announced that several investment
            banks were wiped off the map<sup>1</sup>. And it was just the beginning.</p>
        </div>
        <div class="col-md-6">
            <div style="width: 80%; height: 400px; background: #000"></div>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3><a href="{{ get_permalink($post->ID) }}">{{ $post->post_title }}</a></h3>
                {{ apply_filters('the_excerpt',$post->post_excerpt); }} <a href="{{ get_permalink($post->ID) }}">Read more&hellip;</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@stop

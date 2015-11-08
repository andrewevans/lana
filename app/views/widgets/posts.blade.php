@if (sizeof($posts) > 0)

@foreach ($posts as $key => $post)
<?php
// @TODO: HACK: Bug in WP has_post_thumbnail() doesn't work, so check it manually
$post_featured_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID))[0];
?>
<div class="col-md-12 post">
    @if (sizeof($post_featured_img) > 0)
    <div class="post-img">
        <a href="{{ get_permalink($post->ID) }}">
            <img src="{{ $post_featured_img }}" />
        </a>
    </div>
    @endif
    <h4><a href="{{ get_permalink($post->ID) }}">{{ $post->post_title }}</a></h4>
</div>
<?php
// @TODO: HACK: Bug in WP has_post_thumbnail() doesn't work, so check it manually
unset($post_featured_img);
?>
@endforeach

@endif

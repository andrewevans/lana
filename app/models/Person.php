<?php
// app/models/Person.php

class Person extends Eloquent
{
    public $timestamp = false;

    protected $table = 'people';

    protected $guarded = []; // @TODO: Consider which attributes are not mass assignable

    public function url()
    {
        return '/people/' . $this->url_slug;
    }
}

<?php

class PeopleController extends \BaseController {

    public function index()
    {
        $people = Person::all();

        return View::make('people.index', [
            'people' => $people,
        ]);
    }


    public function show($person)
    {
        $person = Person::whereUrlSlug($person)->first();

        return View::make('people.show', [
            'person' => $person,
        ]);
    }
}

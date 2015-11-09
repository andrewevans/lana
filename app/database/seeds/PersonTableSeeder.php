<?php

class PersonTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        Person::truncate(); // clear table

        $person = Person::create([
            'slug' => 'lincoln',
            'alias' => "The Abraham Lincoln",
            'url_slug' => 'abraham-lincoln',
            'first_name' => 'Abraham',
            'last_name' => 'Lincoln',
            'url_slug' => 'abraham-lincoln',
            'favorite_color' => 'White',
            'meta_title' => 'Abraham Lincoln, the Ultimate Abolitionist',
            'meta_description' => 'You have no oath registered in Heaven to destroy the government,
            while I shall have the most solemn one to preserve, protect and defend it.',
        ]);

        foreach(range(1,5) as $index)
        {
            $alias = $faker->name;

            $person = Person::create([
                'slug' => substr(preg_replace("/[^a-z0-9 ]/", '', strtolower($faker->userName)), 0, 16),
                'alias' => $alias,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'url_slug' => $faker->slug,
                'favorite_color' => $faker->colorName,
                'meta_title' => $alias . ' Details',
                'meta_description' => $faker->paragraph,
            ]);
        }
    }
}

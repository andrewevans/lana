<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::truncate(); // Empty table

        $user = User::create(array(
            'username' => 'lanauser',
            'first_name' => 'Lana',
            'last_name' => 'Pasama',
            'email' => 'lana@example.com',
            'password' => 'password1234'
        ));

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++)
        {
            $user = User::create(array(
                'username' => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => $faker->word
            ));
        }
    }
}
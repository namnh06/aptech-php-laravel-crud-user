<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(0, 1000) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => $faker->password
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\User;
use App\University;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $univ = University::create([
            'name' => 'Gunadarma'
        ]);

        $univ2 = University::create([
            'name' => 'Unindra'
        ]);

        $univ3 = University::create([
            'name' => 'Binus'
        ]);

        $univ4 = University::create([
            'name' => 'Mercubuana'
        ]);

        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 1000; $i++){
    		DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'gundarma'.$i.'@gmail.com',
                'password' => bcrypt('rahasia'),
                'university_id' => $univ->id,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber
    		]);
    	}

        for($i = 1; $i <= 200; $i++){
    		DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'unindra'.$i.'@gmail.com',
                'password' => bcrypt('rahasia'),
                'university_id' => $univ2->id,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber
    		]);
    	}

        for($i = 1; $i <= 1500; $i++){
    		DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'binus'.$i.'@gmail.com',
                'password' => bcrypt('rahasia'),
                'university_id' => $univ3->id,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber
    		]);
    	}

        for($i = 1; $i <= 800; $i++){
    		DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'mercubuana'.$i.'@gmail.com',
                'password' => bcrypt('rahasia'),
                'university_id' => $univ4->id,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber
    		]);
    	}
    }
}

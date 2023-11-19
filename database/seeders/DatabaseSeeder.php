<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);
        for ($i = 0; $i < 10; $i++) {
            Mahasiswa::create(
                [
                    'nim' => $faker->unique()->numerify('10######'),
                    'nama' => $faker->firstName() . " " . $faker->lastName(),
                    'tanggal_lahir' => $faker->dateTimeInInterval(
                        '1999-01-01',
                        '+ 3 years'
                    ),
                    'ipk' => $faker->randomFloat(2, 2, 4),
                    'created_at' => $faker->dateTimeBetween('-10 days', '-5 days'),
                    'updated_at' => $faker->dateTimeBetween('-3 days'),
                ]
            );
        }
    }
}

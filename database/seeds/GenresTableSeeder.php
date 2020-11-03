<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Faker\Generator as Faker;



class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $genreArray = [
        //     'fantasy',
        //     'horror',
        //     'drama',
        //     'comedy',
        //     'action',
        //     'sci-fi'
        // ];

        // foreach ($genreArray as $genre) {
        //     $newGenre = new Genre();
        //     $newGenre->name = $genre;
        //     $newGenre->save();
        // }

        $array = [];

        while (count($array) < 10) {

            $fakerword = $faker->word;
            if (!in_array($fakerword, $array)) {

                $array[] = $fakerword;
            }
        }

        foreach ($array as $genre) {
            $newGenre = new Genre();
            $newGenre->name = $genre;
            $newGenre->save();
        }
    }
}

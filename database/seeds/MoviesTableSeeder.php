<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if(DB::table('movies')->get()->count() == 0){

            DB::table('movies')->insert([
            [
                'movie_title' => 'Jurassic Park (1993)',
                'description' => 'During a preview tour, a theme park suffers a major power breakdown that allows its cloned dinosaur exhibits to run amok.',
                'movie_image' => 'https://m.media-amazon.com/images/M/MV5BMjM2MDgxMDg0Nl5BMl5BanBnXkFtZTgwNTM2OTM5NDE@._V1_UX182_CR0,0,182,268_AL_.jpg',
                'release_date' => date('Y-m-d'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),
            ], [
                'movie_title' => 'Bumblebee (2018)',
                'description' => 'On the run in the year 1987, Bumblebee finds refuge in a junkyard in a small Californian beach town. Charlie, on the cusp of turning 18 and trying to find her place in the world, discovers Bumblebee, battle-scarred and broken.',
                'movie_image' => 'https://m.media-amazon.com/images/M/MV5BMjEzNDQzNDAwMl5BMl5BanBnXkFtZTgwNDkzNDU2NTM@._V1_UX182_CR0,0,182,268_AL_.jpg',
                'release_date' => date('Y-m-d'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),
            ], [
                'movie_title' => 'Fifty Shades Darker (2017)',
                'description' => 'While Christian wrestles with his inner demons, Anastasia must confront the anger and envy of the women who came before her.',
                'movie_image' => 'https://m.media-amazon.com/images/M/MV5BMTQ5NTk0Njg2N15BMl5BanBnXkFtZTgwNzk5Nzk3MDI@._V1_UX182_CR0,0,182,268_AL_.jpg',
                'release_date' => date('Y-m-d'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),
            ], [
                'movie_title' => 'Transformers: The Last Knight (2017)',
                'description' => 'Autobots and Decepticons are at war, with humans on the sidelines. Optimus Prime is gone. The key to saving our future lies buried in the secrets of the past, in the hidden history of Transformers on Earth.',
                'movie_image' => 'https://m.media-amazon.com/images/M/MV5BMTk3OTI3MDk4N15BMl5BanBnXkFtZTgwNDg2ODIyMjI@._V1_UY268_CR0,0,182,268_AL_.jpg',
                'release_date' => date('Y-m-d'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),
            ], [
                'movie_title' => 'aaaa',
                'description' => 'aaaa',
                'movie_image' => 'aaaa',
                'release_date' => date('Y-m-d'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),
            ]]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
}


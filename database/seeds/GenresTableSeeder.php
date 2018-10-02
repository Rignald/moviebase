<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if(DB::table('genres')->get()->count() == 0){

            DB::table('genres')->insert([
                [
                    'title' => 'action',
                ], [
                    'title' => 'adventure',
                ], [
                    'title' => 'animation',
                ], [
                    'title' => 'crime',
                ], [
                    'title' => 'thriller',
                ], [
                    'title' => 'short',
                ], [
                    'title' => 'mystery',
                ], [
                    'title' => 'sport',
                ], [
                    'title' => 'reality-tv',
                ], [
                    'title' => 'western',
                ], [
                    'title' => 'documentary',
                ], [
                    'title' => 'biography',
                ], [
                    'title' => 'news',
                ], [
                    'title' => 'film-noir',
                ], [
                    'title' => 'drama',
                ], [
                    'title' => 'comedy',
                ], [
                    'title' => 'sci-fi',
                ], [
                    'title' => 'fantasy',
                ], [
                    'title' => 'family',
                ], [
                    'title' => 'romance',
                ], [
                    'title' => 'horror',
                ], [
                    'title' => 'war',
                ], [
                    'title' => 'history',
                ], [
                    'title' => 'game-show',
                ], [
                    'title' => 'music',
                ], [
                    'title' => 'musical',
                ], [
                    'title' => 'talk-show',
                ], [
                    'title' => 'adult',
                ], [
                    'title' => 'aaaa',
                ]
            ]);

        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }

    }
}

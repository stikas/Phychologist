<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=1;$i<4;$i++) {
    		DB::table('articles')->insert([
            'title' => str_random(10),
            'article' => str_random(1000),
            'image_name' => str_random(10),
        ]);
    	}
    }
}

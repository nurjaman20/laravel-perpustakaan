<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        	['title'=>'Tips Cepat Nikah',
        	'content'=>'lorem ipsum'],
        	['title'=>'Haruskah Menunda Nikah?',
        	'content'=>'lorem ipsum'],
        	['title'=>'Membangun Visi Misi Keluarga',
        	'content'=>'lorem ipsum']
        ];

        //Masukan data ke database
        DB::table('posts')->insert($posts);
    }
}

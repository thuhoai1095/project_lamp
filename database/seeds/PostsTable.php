<?php

use Illuminate\Database\Seeder;
use \App\Post;

class PostsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = "Day la tieu de";
        $post->content = "Day la noi dung";
        $post->date = "2017-09-07 00:00:00";
        $post->point = 1;
        $post->author_id = 1;
        $post->category_id = 1;
        $post->save();
    }
}

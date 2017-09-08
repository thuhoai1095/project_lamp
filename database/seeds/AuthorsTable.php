<?php

use Illuminate\Database\Seeder;
use \App\Author;

class AuthorsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author();
        $author->name = "Nguyen Thi Huong";
        $author->password = "123456";
        $author->email = "huongnt1@nal.vn";
        $author->save();
    }
}

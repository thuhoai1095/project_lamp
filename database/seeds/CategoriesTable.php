<?php

use Illuminate\Database\Seeder;
use \App\Category;

class CategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Khoa hoc";
        $category->save();
    }
}

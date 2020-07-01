<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $categories = ['general','featured','trending'];
    public function run()
    {

        for($i = 0; $i < 3; $i++)
        Category::create([
            'name' => $this->categories[$i]
        ]);
    }
}

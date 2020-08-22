<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create(
        	[
        		'name'=>'Politik'
        	]
        );

         Category::create(
            [
                'name'=>'Helaty'
            ]   
        );
          
          Category::create(     
            [
                'name'=>'Sport'
            ]
        );
           Category::create(
            [
                'name'=>'Food'
            ]
        );
    }
}

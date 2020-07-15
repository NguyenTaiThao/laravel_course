<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            ['id'=>1,'name'=>'Áo nam', 'slug'=>'ao-nam','parent_id'=>0],
            ['id'=>2,'name'=>'Áo phông nam', 'slug'=>'ao-phong-nam','parent_id'=>1],
            ['id'=>3,'name'=>'Quần nam', 'slug'=>'quan-nam','parent_id'=>1],
            ['id'=>4,'name'=>'Quần âu nam', 'slug'=>'quan-au-nam','parent_id'=>3],
            ['id'=>5,'name'=>'Quần bỏ nam', 'slug'=>'quan-bo-nam','parent_id'=>3],

            ['id'=>6,'name'=>'Áo sơ mi nam', 'slug'=>'ao-so-mi-nam','parent_id'=>1],

            ['id'=>7,'name'=>'Áo nữ', 'slug'=>'ao-nu','parent_id'=>0],
            ['id'=>8,'name'=>'Áo phông nữ', 'slug'=>'ao-phong-nu','parent_id'=>7],
            ['id'=>9,'name'=>'Áo sơ mi nữ', 'slug'=>'ao-so-mi-nu','parent_id'=>7],
            ['id'=>10,'name'=>'Áo văn phòng nữ', 'slug'=>'ao-van-phong-nu','parent_id'=>7],
        ]);
    }
}
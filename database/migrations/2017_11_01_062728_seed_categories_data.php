<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => '吊环',
                'description' => 'ring',
            ],
            [
                'name'        => '油封座',
                'description' => 'Oil seat',
            ],
            [
                'name'        => '螺母体',
                'description' => 'Spiral',
            ],
            [
                'name'        => '限位块',
                'description' => 'Limit Block',
            ],
            [
                'name'        => '套管',
                'description' => 'bush',
            ],
            [
                'name'        => '螺栓',
                'description' => 'bolt',
            ],
            [
                'name'        => '吊环总成',
                'description' => 'Ring Assembly',
            ],
            [
                'name'        => '螺母体总成',
                'description' => 'Screw matrix assembly',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}
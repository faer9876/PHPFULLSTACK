<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CategorySeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //더미 데이터 삽입용 팩토리 호출
        $this->call(CategorySeeder::class);
        $cnt=0;
        while($cnt<=29){
        \App\Models\Board::factory(10000)->create();
        $cnt++;
    }
        // \App\Models\User::factory(10)->create();
    }
}

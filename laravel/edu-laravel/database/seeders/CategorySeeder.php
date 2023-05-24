<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    // 초기 데이터 생성
    // 1. 시더 클래스를 생성(database\seeders에 생성됨) : php artisan make:seeder '클래스명'-> 보통 모델명 따라가고 뒤에 Seeder 붙임
    // 2. database\seeders\DatabaseSeeder->run() 안에 1에서 생성한 시더 클래스를 콜에 추가
    // 3. 1.에서 생성한 시더 클래스에 레코드 추가 코드를 작성
    // 4-1. 개별 시더 실행 : php artisan db:seed --class=CategorySeeder
    // 4-2. database\seeders\DatabaseSeeder->run()에 설정된 모든 시더 및 팩토리 실행 : php artisan db:seed


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 초기 데이터 삽입용 시더 호출
        DB::table('categories')->insert([
            ['no'=>'0','name'=>'카테고리0']
            ,
            ['no'=>'1','name'=>'카테고리1']
            ,
            ['no'=>'2','name'=>'카테고리2']
            ,
            ['no'=>'3','name'=>'카테고리3']
            ,
            ['no'=>'4','name'=>'카테고리4']
            ,
            ['no'=>'5','name'=>'카테고리5']
            ,
            ['no'=>'6','name'=>'카테고리6']
            ,
            ['no'=>'7','name'=>'카테고리7']
            ,
            ['no'=>'8','name'=>'카테고리8']
            ,
            ['no'=>'9','name'=>'카테고리9']]
        );
    }
}

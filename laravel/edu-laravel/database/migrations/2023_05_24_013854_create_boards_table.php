<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate -> up method 실행
    // rollback 과 reset의 차이점 : reset->drop rollback-> 가장 최근 migration으로 이동
    // migration reset(모든 migration 파일의 down() method 실행): php artisan migrate:reset
    // migration rollback(가장 마지막에 실행한 migrationd의 내용을 롤백): php artisan migrate:rollback

    // 시더(초기 데이터 생성) : database\seeders의 각 클래스 파일 확인
    // 팰토리(더미 데이터 생성) : database\factories의 각 클래스 파일 확인

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            //  no, title, contents, delflg, c-date, m-date 
            $table->id('bno'); // binginteger type, pk, auto_increment
            $table->char('category',1)->index(); // char(1), not null, index추가
            $table->string('btitle',100); // varchar(100), not null
            $table->string('bcontents',4000);
            $table->timestamps();// created_at, updated_at를 생성, nullable
            $table->timestamp('deleted_at')->nullable();// created_at, updated_at를 생성, nullable
            $table->char('deleted_flg',1)->default('0');// char(1), default '0', not null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
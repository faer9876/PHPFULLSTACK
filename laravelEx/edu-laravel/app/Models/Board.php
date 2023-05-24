<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // create model : php artisan make:model 'name' -mfs
    // to option : migration, factory, seeder all create

    // 테이블 정의 (정의하지 않을 경우 클래스 명의 복수형을 암묵적 인식)
    protected $table = 'boards';

    //pk 정의(정의하지 않을 경우에는 id컬럼을 pk로 인식)
    protected $primaryKey = 'board_no';

    // 대향 할당을 이용한 취약성 대체
    //1. 화이트 리스트 방식 : 수정할 수 있는 컬럼 설정
    // protected $fillable = ['column1','column2'];
    //2. 블랙 리스트 방식 : 수정할 수 없는 컬럼 설정
    // protected $guarded = ['column1','column2'];

    protected $guarded= [];


}
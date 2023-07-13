<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // 타입 케스트
    protected $casts = [
        'completed' => 'boolean',
    ];

    // completed_at을 데이트 설정에 추가
    protected $dates = [
        'completed_at',
    ];

    //API로 Json을 parsing 할 때 데이터를 timezone에 맞추기 위한 설정
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

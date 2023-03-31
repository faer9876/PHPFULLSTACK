<?php
class Car{
        /*
        $car_name : 차 이름을 저장 하는 멤버 변수
        $car_color : 차 색깔을 저장하는 멤버변수

        method명 : car_make
        parameter : 
                    string $param_name
                    string $param_color
        기능 : 멤버변수에 값을 세팅

        method 명 : car_out
        parameter : 없음
        기능 : 자동차 이름과 색깔을 출력(형식 : $car_name."색".$cal_color) */

        public $car_name;
        public $car_color;

        public function car_make($param_color,$param_name){
            $this->car_color=$param_color;
            $this->car_name=$param_name;
        }
        public function car_out(){
            print $this->car_color. "색 " .$this->car_name;
        }
    }
    
    $obj_Car=new Car;


    $obj_Car->car_make("검정","아반떼");
    $obj_Car->car_out();

?>
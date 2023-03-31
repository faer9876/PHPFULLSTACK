<?php
    // class Student{ //접근제어
    //     //클래스 멤버 변수
    //     public $std_name; //어디서든 사용가능
    //     private $std_id; // student class 내에서만 접근 가능
    //     protected $std_age; // 상속 class 내에서만 접근 가능

    //     public function print_student($param_std_name, $param_std_age){
    //         $result_name="이름 :".$param_std_name;
    //         $result_age="나이 :".$param_std_age."세";
    //         echo $result_name;
    //         echo "\n";
    //         echo $result_age;
    //     }
        //this 포인터
    //     public function set_std_id($param_id){
    //         $this-> std_id= $param_id; // class 자기 자신을 가르키고 있음
    //     }
    //     public function get_std_id(){
    //         return $this-> std_id;
    //     }
    // }

    // $obj_Student=new Student; // 클래스 호출
    // $obj_Student->print_student("홍길동", 27); //클래스의 method 호출

    //class의 멤버 변수 사용 방법
    // $obj_Student->std_name;
    // $obj_Student->std_name="갑돌이";
    // echo $obj_Student->std_name;

    //지시자가 private이기 때문에 접근 권한이 없다
    // $obj_Student->std_id="갑돌이id";

    //private 객체를 사용할 수 있는 방법

    // $obj_Student->set_std_id("갑순이id");
    // echo $obj_Student->get_std_id();
    
    // 생성자(constructor)
    class food{
        private $food_name;

        //생성자 __construct
        public function __construct($parama_food_name){
            $this->food_name=$parama_food_name;
        }
        public function print_food_name(){
            echo $this->food_name;
        }
    }
    $obj_food=new food("탕수육");
    $obj_food->print_food_name();
    




?>
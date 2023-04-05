<?php
    // function fnc_refernce2(&$param_str){
    //     echo "2번 : $param_str \n";
    //     $param_str = "fnc_refernce2에서 값 변경";
    //     echo "3번 : $param_str \n";
    // }

    // $str="aaa";
    // echo "1번 : $str \n"; //aaa
    // fnc_refernce2($str); // aaa fnc
    // echo "4번 : $str \n" // fnc 

    
    
    
    //---------- class ------------
    class Food{
        // 접근 제어 지시자
        // public : 모든 클래스 접근,상속 가능
        // private : 동일 클래스 내에서만 접근 가능
        // protected : 외부 클래스 사용 불가능 단, 상속 가능
        
        
        // 멤버 변수
        protected $str_name;
        protected $int_price;


        // 메소드
        public function __construct($param_name,$param_price){
            $this->str_name=$param_name;
            $this->int_price=$param_price;
            // $this->int_price=$param_price+=$param_add;
        }
        public function fnc_print_food(){
            $str = $this->str_name." : ".$this->int_price."원\n";
            echo $str;
        }
        public function reset_price($param_price){
            $this->int_price=$param_price;
        }
    }
    
    // $obj_food=new Food("탕수육", 10000 );
    // // $obj_food->reset_price(99999);
    // $obj_food->fnc_print_food();
    
    // $obj_food=new Food("고기", 10000 );
    // // $obj_food->reset_price(12000);
    // $obj_food->fnc_print_food();
    
    
    
    // 상속
    // class KoreanFood extends food{
    //     protected $side_dish;
        
    //     public function __construct($param_name, $param_price, $param_side_dish){
    //         $this->str_name=$param_name;
    //         $this->int_price=$param_price;
    //         $this->side_dish=$param_side_dish;
    //     }
    //     //오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
    //     public function fnc_print_food(){
    //         // $str = $this->str_name." : ".$this->int_price."원\n"."반찬 : ".$this->side_dish."\n";
    //         parent::fnc_print_food(); //부모의 메소드를 가져옴
    //         $str = "반찬 : ".$this->side_dish."\n";
    //         echo $str;
    //     }
    // }
    // $obj_korean_food = new KoreanFood( "치킨",20000,"치킨무" );
    // $obj_korean_food->fnc_print_food();


    class People{
        private $name;
        private $age;

        public function setName($param_name,$param_age){
            $this->name=$param_name;
            $this->age=$param_age;
        }
        public function peoplePrint(){
            echo $this->name."\n".$this->age."세\n";
        }
    }
    // $obj_people=new People;
    // $obj_people->setName("김영범",25);
    // $obj_people->peoplePrint();

    class Student extends People{
        // private $id="d001";
        private $id;
        
        public function setid($param_id){
            $this->id=$param_id;
        }

        public function studentPrint(){
            parent::peoplePrint();
            $std = "id : ".$this->id." 입니다.";
            echo $std;
        }
    }

    $obj_student = new Student;
    $obj_student->setName("김영범",25);
    $obj_student->setid("d001");
    $obj_student->studentPrint();
?>
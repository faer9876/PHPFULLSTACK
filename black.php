<?php
class Game {
    private $deck = []; // 덱 초기화
    private $player = ["cards" => [], "score" => 0]; // 플레이어 초기화 2차원 배열로 선언
    private $dealer = ["cards" => [], "score" => 0]; // 딜러 초기화
    private $shapes = [0, 1, 2, 3];
    private $ranks = ["A" => 11,"K" => 10,"Q" => 10,"J" => 10,"10" => 10,"9" => 9,"8" => 8,"7" => 7,"6" => 6,"5" => 5,"4" => 4,"3" => 3,"2" => 2];


    public function __construct() {
        // 카드 덱 만들기
        
        foreach ($this->shapes as $shape) {
            foreach ($this->ranks as $rank => $value) {
                $card = $rank.$shape;
                array_push($this->deck, ["card" => $card, "value" => $value]); //배열에 키랑 밸류 한번에 지정
            }
        }
        shuffle($this->deck);
    }

    public function debug(){
        // var_dump($this->deck);
        // var_dump($this->getPlayerCards());
        // var_dump($this->getDealerCards());
        // var_dump($this->deck);
        // var_dump($this->player["cards"]);
        // var_dump($this->dealer["cards"]);
        // var_dump($this->player["score"]);
        // var_dump($this->dealer["score"]);
    }


    // 일단은 카드 2장 받는거
    public function start() {
        for ($i = 0; $i < 2; $i++) {
            $this->getPlayerCards();
            $this->getDealerCards();
        }
        while(true){
            echo "\n";
            echo "inputNumber";
            print "\n";
            fscanf(STDIN, "%d\n",$input);
            
            if($input===0){
                echo "end";
                break;
            }else if($input===1){
                $this->getPlayerCards();
                $this->getDealerCards();
            }else if($input===2){
                $this->compareScore();
            }


            // if ($this->player["score"] == 21) {
            //     echo "Player wins!";
            // } else if ($this->dealer["score"] == 21) {
            //     echo "Dealer wins!";
            // }else if($this->player["score"]>21){
            //     echo "Player bust!!";
            // } else if ($this->dealer["score"]>21){
            //     echo "Dealer bust!!";
            // }
            // // $input=rand(1,10);
            // echo $input;
            // print "\n";
        }
    }



    public function getPlayerCards() {
        // 플레이어가 카드를 받을 때 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음 아니면 스탑 순차적으로 앞에서 받음

            if($this->dealer["score"]<17){
                $card = array_pop($this->deck);
                array_push($this->player["cards"],$card);
                $this->player["score"] += $card["value"];
            }
            echo "플레이어 점수는 :".$this->player["score"]."\n";
            echo "\n";
            if($this->player["score"]>21){
                echo "Player bust!!"."\n";
            }
        // 카드를 받을 수 있는지 확인하고 받을 수 있으면 카드 받기
//         if(!empty($this->deck)) {
//             $card = array_pop($this->deck);
//             array_push($this->player["cards"], $card);
//             $this->player["score"] += $card["value"];
//             if ($this->player["score"] == 21) {
//                 echo "Player wins!"."\n";
//             } else if ($this->dealer["score"] == 21) {
//                 echo "Dealer wins!"."\n";
//             }else if($this->player["score"]>21){
//                 echo "Player bust!!"."\n";
//             } else if ($this->dealer["score"]>21){
//                 echo "Dealer bust!!"."\n";
//             }
//                 echo "점수는".$this->player["score"];
//                 echo "\n";
//                 echo "점수는".$this->dealer["score"];
//                 echo "\n";
//                 return $this->player["cards"];
//     }
}

    public function getDealerCards() {
        // 딜러는 카드를 받을 수 있는지 확인하고 받을 수 있으면 카드 받기
        if (!empty($this->deck)) {
            $card = array_pop($this->deck);
            array_push($this->dealer["cards"],$card);
            $this->dealer["score"] += $card["value"];
        }
            echo "딜러 점수는 :".$this->dealer["score"]."\n";
            echo "\n";
            if ($this->dealer["score"]>21){
            echo "Dealer bust!!"."\n";
            }
        }

        private function compareScore(){
            if($this->player["score"] < 21 && $this->dealer["score"] < 21){
                if($this->player["score"] > $this->dealer["score"]){
                    echo "Player win";
                }else {
                    echo "Dealer win";
                }
                
            }
        }

        // private function getCardPlayer() {
        //     $card = array_pop($this->deck);
        //     array_push($this->player["cards"], $card);
        //     $this->player["score"] += $card["value"];
        //     if ($this->player["score"] == 21) {
        //         echo "Player wins!"."\n";
        //     } else if ($this->dealer["score"] == 21) {
        //         echo "Dealer wins!"."\n";
        //     }else if($this->player["score"]>21){
        //         echo "Player bust!!"."\n";
        //     } else if ($this->dealer["score"]>21){
        //         echo "Dealer bust!!"."\n";
        //     }
        //     echo "점수는".$this->player["score"];
        //     echo "\n";
        //     echo "점수는".$this->dealer["score"];
        //     echo "\n";
        // }
        
        // private function getCardDealer() {
        //     $card = array_pop($this->deck);
        //     array_push($this->dealer["cards"], $card);
        //     $this->dealer["score"] += $card["value"];
        //     if ($this->player["score"] == 21) {
        //         echo "Player wins!"."\n";
        //     } else if ($this->dealer["score"] == 21) {
        //         echo "Dealer wins!"."\n";
        //     }else if($this->player["score"]>21){
        //         echo "Player bust!!"."\n";
        //     } else if ($this->dealer["score"]>21){
        //         echo "Dealer bust!!"."\n";
        //     }
        //     echo "점수는".$this->player["score"];
        //     echo "\n";
        //     echo "점수는".$this->dealer["score"];
        //     echo "\n";
        // }
        private function compareCardNumer(){
            if($this->player["score"]==$this->dealer["score"] && count($this->player["cards"])>count($this->dealer["cards"])){
                echo "Player wins!"."\n";
            }else{
                echo "Dealer wins!"."\n";
            }
        }
        private function compareCardShape(){
            for($i=0;$i<count($this->player["cards"]);$i++){
                $sum1 += $this->player["score"];
                $sum2 += $this->dealer["score"];

                if($sum1==$sum2)
                // if($sum1==$sum2 && strpos($this->player[$i],"A")==true){
                //     if(strpos($this->dealer[$i],"A")!==true){
                //         echo "Player wins!";
                //     }else if($sum1==$sum2 && strpos($this->player[$i],"J")==true){
                //         if(strpos($this->dealer[$i],"A")==true){

                //         }
                //     }
                // }
                // return $this->player["score"];
            }

            // a S  10 H
            // A C  10 D
            // 0123
            // $face = substr($this->player["cards"],0,count($this->player["cards"]));
            // // $suit = substr($card,-1,1);
            // $num_pattern = '/[0-9]/';
            // $face_pattern = '/[AJQK]/';
            // $A=preg_match($num_pattern);
            // $J=preg_match($);
            // $Q;
            // $K;
            // if (preg_match($num_pattern,$face))



            // if($this->player["score"]==$this->dealer["score"]){
            //     if($this->player["cards"]=="A" && $this->dealer["cards"]){

            //     }
            // }
        }
        private function usingAce(){
            $ace=0;
            if($this->ranks=="A"){
                $ace++;
            }
            for($i=0;$i<$ace;$i++){
                if($this->player["value"]<=10){
                    $this->player["value"]+=11;
                }else{
                    $this->player["value"]+=1;
                }
                return $this->player["value"];
            }
        }
    }

    $game = new Game();
    $game->start();

    $objBJ=new Game();
    $objBJ->debug();

?>        

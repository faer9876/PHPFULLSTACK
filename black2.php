<?php
    class Game {
        private $deck = []; // 덱 초기화
        private $player = ["cards" => [], "score" => 0]; // 플레이어 초기화 2차원 배열로 선언
        private $dealer = ["cards" => [], "score" => 0]; // 딜러 초기화
        private $shapes = [0, 1, 2, 3];
        private $ranks = ["A" => 11,"K" => 10,"Q" => 10,"J" => 10,"10" => 10,"9" => 9,"8" => 8,"7" => 7,"6" => 6,"5" => 5,"4" => 4,"3" => 3,"2" => 2];
        private $ACE="A";
        private $playerDeck=[];
        private $dealerDeck=[];
        
    
        public function __construct() {
            foreach ($this->shapes as $shape) {
                foreach ($this->ranks as $rank => $value) {
                    $card = $rank.$shape;
                    array_push($this->deck, ["card" => $card, "value" => $value]); //배열에 키랑 밸류 한번에 지정
                }
            }
            shuffle($this->deck);
        }

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
                    if($this->player["score"]==$this->dealer["score"]){
                        $this->compareCardShape();
                    }
                }
            }
        }

        public function getPlayerCards() {
            // 플레이어가 카드를 받을 때 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음 아니면 스탑 순차적으로 앞에서 받음
                if (!empty($this->deck)){    
                    $card = array_pop($this->deck);
                    array_push($this->player["cards"],$card);
                    if($card=="A0"&&"A1"&&"A2"&&"A3"){
                        if($this->player["score"] <= 10){
                            $card["value"]=11;
                        }else{
                            $card["value"]=1;
                        }
                    }
                    $this->player["score"] += $card["value"];

                    foreach($this->player["cards"] as $cad){
                        // array_push($this->playerDeck, $cad);
                        // var_dump($cad)
                        $str=implode(" ",$cad);
                        
                    }
                    // if(!is_null($this->playerDeck)){
                    //     $str=implode(" ",$cad);
                    //     if(strpos($str,$this->ACE)===true){
                    //         $this->usingAce();
                    //     }
                    // }
                }
                if(empty($this->deck)){
                    echo "덱이 비었습니다.\n";
                    return 0;
                }
                // var_dump($this->playerDeck);
                echo "플레이어가 뽑은 카드는 :" .$str."\n";
                echo "플레이어 점수는 :".$this->player["score"]."\n";
                
                if($this->dealer["score"]==21 && $this->player["score"]==21){
                    // echo "Player win!!"."\n";
                    $this->compareCardShape();
                    echo "\n";
                    $this->restart();
                }else if($this->player["score"]>21){
                    echo "Player bust!!"."\n";
                    echo "\n";
                    $this->restart();
                }else if($this->dealer["score"]!=21 && $this->player["score"]==21){
                    echo "Player win!!"."\n";
                    $this->restart();
                }
            }

            public function getDealerCards() {
                // 딜러는 카드를 받을 수 있는지 확인하고 받을 수 있으면 카드 받기
                if(empty($this->deck)){
                    echo "덱이 비었습니다.\n";
                    return 0;
                }

                if($this->dealer["score"]<17){
                    $card = array_pop($this->deck);
                    array_push($this->dealer["cards"],$card);
                    if($card=="A0"&&"A1"&&"A2"&&"A3"){
                        if($this->dealer["score"] <= 10){
                            $card["value"]=11;
                        }else{
                            $card["value"]=1;
                        }
                    }
                    $this->dealer["score"] += $card["value"];

                    foreach($this->dealer["cards"] as $cad){
                        // array_push($this->playerDeck, $cad);
                        $str=implode(" ",$cad);
                        
                    }
                    if(!is_null($this->dealerDeck)){
                        $str=implode(" ",$cad);
                        if(strpos($str,$this->ACE)===true){
                            $this->usingAce();
                        }
                    }
                }
                    echo "딜러가 뽑은 카드는 :" .$str."\n";
                    echo "딜러 점수는 :".$this->dealer["score"]."\n";

                    if($this->dealer["score"]>=17 && $this->dealer["score"]<21){
                        $this->compareScore();
                        $this->restart();
                    }else if($this->dealer["score"]==21 && $this->player["score"]==21){
                        $this->compareCardShape();
                        // echo "Dealer win!!"."\n";
                        echo "\n";
                        $this->restart();
                    }else if ($this->dealer["score"]>21){
                        echo "Dealer bust!!"."\n";
                        echo "\n";
                        $this->restart();
                    }else if($this->dealer["score"]==21 && $this->player["score"]!=21){
                        echo "Dealer win!!"."\n";
                        $this->restart();
                    }
                }
        
                private function compareScore(){
                    if($this->player["score"] < 21 && $this->dealer["score"] < 21){
                        if($this->player["score"] > $this->dealer["score"]){
                            echo "Player win!!\n";
                            echo "\n";
                        }else if($this->player["score"] < $this->dealer["score"]){
                            echo "Dealer win!!\n";
                            echo "\n";
                        }else{
                            $this->compareCardShape();
                        }
                }
            }

                // private function compareCardNumer(){
                //     if($this->player["score"]==$this->dealer["score"] && count($this->player["cards"])>count($this->dealer["cards"])){
                //         echo "Player win!"."\n";
                //         echo "\n";
                //     }else{
                //         echo "Dealer win!"."\n";
                //         echo "\n";
                //     }
                // }

                private function compareCardShape(){
                $shapeOrder = [0, 1, 2, 3]; // 모양 우선순위: 0 = 스페이드, 1 = 하트, 2 = 다이아몬드, 3 = 클로버
                
                for($i = 0; $i < count($this->player["cards"]); $i++){
                    $playerShape = $this->player["cards"][$i]["card"][-1]; // 플레이어 카드의 모양 (마지막 글자)
                    $dealerShape = $this->dealer["cards"][$i]["card"][-1]; // 딜러 카드의 모양 (마지막 글자)
                    $playerShapeIndex = array_search($playerShape, $this->shapes); // 플레이어 카드 모양의 우선순위
                    $dealerShapeIndex = array_search($dealerShape, $this->shapes); // 딜러 카드 모양의 우선순위
                    
                    if($playerShapeIndex < $dealerShapeIndex){ // 플레이어의 모양이 딜러보다 높은 우선순위일 경우
                        echo "Player win!"."\n";
                        echo "\n";
                        return;
                    } else if($playerShapeIndex > $dealerShapeIndex){ // 딜러의 모양이 플레이어보다 높은 우선순위일 경우
                        echo "Dealer win!"."\n";
                        echo "\n";
                        return;
                    }
                }
            }

                private function usingAce(){
                    $ace=0;
                    if($this->ranks=="A"){
                        $ace++;
                    }
                    for($i=0;$i<$ace;$i++){
                        if($this->player["value"]<=10){
                            $this->player["value"]+=11;
                        }else if($this->player["value"]>10){
                            $this->player["value"]+=1;
                        }else if($this->dealer["value"<=10]){
                            $this->dealer["value"]+=11;
                        }else if($this->dealer["valuer"]>10){
                            $this->dealare["value"]+=1;
                        }
                    }
                }

                private function restart(){
                    $this->dealer["score"]=0; //재시작용
                    $this->player["score"]=0; //재시작용
                        for ($i = 0; $i < 2; $i++) {
                            $this->getPlayerCards();
                            $this->getDealerCards();
                }
            }
        }

            $game = new Game();
            $game->start();
?>
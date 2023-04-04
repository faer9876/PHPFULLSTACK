<?php
    include_once("122tngFunction.php");

    //아래 쿼리를 이용해서 DB에서 접속 > data획득 후 출력해 주세요.
    $sql1 = " SELECT * FROM dapartment ";
    $sql2 = " SELECT * FROM dept_manager ";

    try {
    $obj_conn=null;
    my_db_conn( $obj_conn );
    $stmt1 = $obj_conn->query($sql1);
    $result1 = $stmt1->fetchAll();
    $stmt2 = $obj_conn->query($sql2);
    $result2 = $stmt2->fetchAll();

    if(count($result1)===0 || count($result2)===0) {
    throw new Exception("DB없음\n");
    }
    } catch (Exception $e) {
        echo "DB없음\n";
        echo $e->getMessage();
        // echo "DB없음\n";
    }
        finally{
        echo "Finally\n";
        $obj_conn=null;
    }
    if(count($result1)===0 && count($result2)>1){
        echo "result1 = error 종료";
        echo "result2 = 정상 종료";
    }else if(count($result1)===0 && count($result2)>1)


?>
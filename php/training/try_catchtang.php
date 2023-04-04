<?php
    include_once("122tngFunction.php");

    //아래 쿼리를 이용해서 DB에서 접속 > data획득 후 출력해 주세요.
    $sql1 = " SELECT * FROM dapartment ";
    $sql2 = " SELECT * FROM dept_manager ";

    function fnc_er($sql){
        try {
            $obj_conn=null;
            my_db_conn( $obj_conn );
            $stmt = $obj_conn->prepare($sql); // 아 맞다 이게 실행되긴 하는데 왜 if로 들어가지 않을까요
            $stmt->execute();
            $result = $stmt->fetchAll();
            echo "Welldone\n";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $obj_conn=null;
        }
    }

    fnc_er($sql1);
    echo "\n";
    fnc_er($sql2);


?>
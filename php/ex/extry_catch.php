<?php
    // try-catch with finally 문 : 에러처리를 하기위한 문법

    include_once("../training/122tngFunction.php");
    // try {
    //     // 우리가 실행하고 싶은 소스코드를 작성
    // } catch (Exception $e) {
    //     // 애러가 발생 했을 때 실행되는 소스코드를 작성
    // }
    // finally{
    //     // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
    // }

    try {
        $obj_conn = null;
        my_db_conn( $obj_conn );
        $sql = " SELECT * FROM employees WHERE emp_no = 1000000 ";
        $stmt = $obj_conn->query( $sql );
        $result = $stmt->fetchAll();
        

        if( count($result) ===0 ){
            throw new Exception("E99\n"); // 에러를 강제로 일으키는 구문
        }

        var_dump( $result );
        echo "try\n";
    } catch( Exception $e ) {
        if( $e->getMessage()==="E99"){
            echo "데이터 0건";
        }else{
            echo $e->getMessage();
        }
    }
    finally{
        echo "FINALLY\n";
        $obj_conn=null;
    }
    echo "종료";
?>
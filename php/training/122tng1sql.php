<?php
    //우리가 작성한 db connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세요.
    //1. 전체 월급의 평균
    //2. 새로운 사원 정보를 employees 테이블에 등록해 주세요.
    //3. 2에서 등록한 사원의 이름을 "길동", 성은"홍"으로 변경해 주세요.
    //4. 2에서 등록한 사원을 삭제해 주세요.

    include_once("122tngFunction.php");
    $obj_conn=null;
    my_db_conn($obj_conn);

    // $sql = "SELECT AVG(salary) FROM salaries WHERE to_date<=:todate";
    // $arr_prepare=array(
    //     ":todate"=> '9999-01-01'
    // );

    // $stmt=$obj_conn->prepare($sql);
    // $result=$stmt->execute($arr_prepare);
    // $result = $stmt->fetchAll();
    // $obj_conn->commit();

    // var_dump($result);


    // $sql2 = "INSERT INTO employees("
    // ." emp_no "
    // ." ,birth_date "
    // ." ,first_name "
    // ." ,last_name "
    // ." ,gender "
    // ." ,hire_date "
    // ." ,sup_no "
    // ." ) " 
    // ." VALUES ("
    // ." :emp_no "
    // ." ,:birth_date "
    // ." ,:first_name "
    // ." ,:last_name "
    // ." ,:gender "
    // ." ,:hire_date "
    // ." ,:sup_no "
    // ." ) ";

    // $arr_prepare = array(
    //     ":emp_no" => 500000
    //     ,":birth_date" => "1999-04-24"
    //     ,":first_name" => "영범"
    //     ,":last_name" => "김"
    //     ,":gender" => "M"
    //     ,":hire_date" => "9999-04-01"
    //     ,":sup_no" => null
    // );

    // $stmt=$obj_conn->prepare($sql2);
    // $result=$stmt->execute($arr_prepare);
    // $result = $stmt->fetchAll();
    // $obj_conn->commit();

    // var_dump($result);

    // $sql = " UPDATE employees "
    // ." SET first_name = :first_name "
    // ." ,last_name = :last_name " 
    // ." WHERE first_name=:first_name2 ";

    // $arr_prepare=array(
    //     ":first_name"=> "길동"
    //     ,":last_name"=>"홍"
    //     ,":first_name2"=>"영범"
    // );

    // $stmt=$obj_conn->prepare($sql);
    // $result=$stmt->execute($arr_prepare);

    // $obj_conn->commit();

    $sql = "DELETE "
    . " FROM employees "
    . " WHERE emp_no=:emp_no ";

    $arr_prepare=array(
        ":emp_no"=>500000
    );

    $stmt=$obj_conn->prepare($sql);
    $result=$stmt->execute($arr_prepare);
    $obj_conn->commit();



    $obj_conn=null;

?>
<?php
    $db_host     = "localhost"; //host
    $db_user     = "root"; //user
    $db_password = "root506"; //password
    $db_name     = "employees"; //db name
    $db_charset  = "utf8mb4"; //charset
    $db_dns      = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option   = array(
        PDO::ATTR_EMULATE_PREPARES    => false //DB의 prepared statement 기능을 사용하도록 설정
        ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION //PDO Exception을 Thorws 하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정  
    );


    // PDO Class로 DB 연동
    $obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
    
//     //사번 10001,10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요. 
//     $sql = 
//             " SELECT  sa.salary, em.emp_no,  em.birth_date 
//             FROM salaries sa 
//             INNER JOIN employees em 
//             ON sa.emp_no= em.emp_no 
//             WHERE(em.emp_no = :emp_no1 OR em.emp_no = :emp_no2) 
//             AND sa.to_date >= now()";
            
// $arr_prepare = array(":emp_no1"=>10001,":emp_no2"=>10002);         
// $stmt=$obj_conn->prepare($sql); //생성
// $stmt->execute($arr_prepare);
// $result = $stmt->fetchAll();
// var_dump($result);

// foreach($result as $value){ // array -> salary (38735) -> array -> salary(73527)
//     echo $value["salary"],"\n";
// }


// INSERT 예제

    $sql =
        " INSERT INTO departments( "
        ." dept_no "
        ." ,dept_name "
        ." ) "
        ." VALUES( "
        ." :dept_no "
        ." ,:dept_name "
        ." ) ";

    $arr_prepare = array(
        ":dept_no" => "d011"
        ,":dept_name" => "PHP 풀스택"  
    );

    $stmt = $obj_conn->prepare( $sql );
    $result = $stmt->execute( $arr_prepare );
    
    $obj_conn->commit();
    var_dump($result);

    $obj_conn = null; // DB 파기
?>
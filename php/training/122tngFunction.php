<?php
    function my_db_conn(&$param_conn){
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
        $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
    }
        // $obj_conn=null;
        // my_db_conn($obj_conn);

        // $sql = " SELECT * FROM employees LIMIT :limit_start";

        // $arr_prepare =
        // array(
        // ":limit_start" => 5
        // );
        
        // $stmt = $obj_conn->prepare($sql);
        // $stmt->execute($arr_prepare);
        // $result = $stmt->fetchAll();
        // var_dump($result);
        // $obj_conn=null; // DB Connection 파기
?>
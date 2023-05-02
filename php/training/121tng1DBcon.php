<?php
    //사번이 10005이하 사원의 사번, 이름(성 이름), 성별 생일
    //DB 연결


    // $dbc = mysqli_connect( "localhost", "root", "root506", "employees",3306);

    // // var_dump($dbc);
    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);

    //쿼리 요청
    $sql=  "
            SELECT emp_no
            , CONCAT(last_name, ' ', first_name) AS full_name
            , gender
            , birth_date 
            FROM employees 
            WHERE emp_no <= 10000
            ";
    function fnc_re($dbc,$sql){
        $result_query = mysqli_query($dbc, $sql);
        //결과 출력 mysqli_num_rows이용해서 레코드 수 체크하는 방법
        if (mysqli_num_rows($result_query) == 0) {
            echo "찾을 자료가 0건 입니다";
        } else {
            while ($result_row = mysqli_fetch_assoc($result_query)) { 
            // echo $result_row['emp_no'] . ' ' . $result_row['full_name'] . ' ' . $result_row['gender'] . ' ' . $result_row['birth_date'] . "\n";
                $result = implode(" ", $result_row);
                echo $result . "\n";
            }
        }
    }

    //다른방법
    // $flag_cnt=false;
    // if(!$flag_cnt){
    //     echo "데이터가 0건 입니다.";
    // }
    // while ($result_row = mysqli_fetch_assoc($result_query)) { 
    //     // echo $result_row['emp_no'] . ' ' . $result_row['full_name'] . ' ' . $result_row['gender'] . ' ' . $result_row['birth_date'] . "\n";
    //         $result = implode(" ", $result_row);
    //         echo $result . "\n";
    //         $flag_cnt=true;
    //     }
        

    mysqli_close($dbc);

?>
<?php
    //아래 쿼리로 결과를 출력
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees",3306);

    // SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?

    //prepare 세팅값
    $date = "9999-01-01";
    $salay = 50000;
    $epn = 5;

    $stmt = $dbc->stmt_init(); //prepare을 사용하기 위한 객체를 초기화 하고 리턴
    $stmt->prepare(
                      " SELECT emp_no, salary 
                        FROM salaries 
                        WHERE to_date = ? 
                        AND salary >= ? ORDER BY salary DESC LIMIT ? "
                        );


    $stmt->bind_param("sii",$date,$salay,$epn); //prepared statement의 값을 세팅
    $stmt->execute(); // 쿼리를 실행
    $stmt->bind_result($emp_no,$emp_salary); 
    // $stmt -> fetch(); ?
    // $result = $stmt->get_result(); // 결과를 셋 한 값을 저장

    //while($row=$result->fetch_assoc()){ //한 줄 씩 불러온 값을 row에 저장 
        // echo "emp_no : ".$row["emp_no"]."salary :".$row["salary"]."\n"; 한 값씩 에코로 출력
    // }

    while($stmt->fetch()){
        echo "$emp_no $emp_salary\n";
    }

    mysqli_close($dbc);
    $dbc->close(); // DB Close
?>
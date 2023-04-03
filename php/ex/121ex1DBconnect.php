<?php
  $dbc = mysqli_connect( "localhost", "root", "root506", "employees",3306);

  // var_dump($dbc);

  // //쿼리 요청
  // $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 1;" );

  // while ($result_row = mysqli_fetch_assoc($result_query)) { 
  //     var_dump($result_row["first_name"]);
  // }


  // ?????????????????????????????????????????????????????
  $i=5;
  // preared statment :
  $stmt =$dbc->stmt_init(); // statment 를 셋팅
  $stmt->prepare(" SELECT emp_no, first_name FROM employees LIMIT ? "); // DB 질의 할 쿼리 작성
  $stmt->bind_param("i",$i);// 원하는 값이 한개 일때
  // $stmt->bind_param("sii",$i1,$i2,$i3);// 원하는 값이 여러개 일때 ex)gender = ? and emp_no <= ?
  // i1="F",i2=10010, i3=5;
  $stmt->execute(); // DB에 쿼리 질의 실행

  //-------------------질의 결과를 우리가 지정한 변수에 담아 사용하는 방법---------------------
  // $stmt->bind_result($col1,$col2); //질의 결과를 각 아큐먼트 저장하기 위한 셋팅
  // $stmt->bind_result(); //질의 결과를 각 아큐먼트 저장하기 위한 셋팅
  // $stmt->fetch(); // bind_result에서 셋팅한 아큐먼트 값을 저장
  // var_dump($col1,$col2); // 레코드 라인에 출력 한번 실행 될때마다 한 레코드씩 저장
  $result=$stmt->get_result();
  while($row=$result->fetch_assoc()){
    echo $row["first_name"],"\n";
  }
  // while($stmt->fetch()){
  //   echo "$col1 $col2\n";
  // } //리미트 넣어준 값 만큼 값을 가져오는 방법

  // got gpt 방법
  // $i = 5;
  // // initialize statement
  // $stmt = $dbc->stmt_init();
  // // prepare query with placeholders
  // $stmt->prepare("SELECT emp_no, first_name FROM employees LIMIT ?");
  // // bind parameter(s) to the query
  // $stmt->bind_param("i", $i);
  // // execute the query
  // $stmt->execute();
  // // bind variables to receive the values of the selected columns
  // $stmt->bind_result($emp_no, $first_name);
  // // fetch the results into the bound variables
  // // $stmt->fetch();
  // // output the result(s)
  // while($stmt->fetch()){
  // echo "Employee Number: " . $emp_no . "\n";
  // echo "First Name: " . $first_name . "\n";
  // }



  mysqli_close($dbc);

?>
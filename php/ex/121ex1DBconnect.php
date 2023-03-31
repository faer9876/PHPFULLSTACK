<?php
  $dbc = mysqli_connect( "localhost", "root", "root506", "employees",3306);

  var_dump($dbc);

  //쿼리 요청
  $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 1;" );
 
  while ($result_row = mysqli_fetch_assoc($result_query)) { 
      var_dump($result_row["first_name"]);
  }

  mysqli_close($dbc);

?>
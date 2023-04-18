<?php
//     1-1   get method 로 데이터를 넘겨주는 방법 1
//     -query string 에 키와 값을 세팅 해준다.
// ex) http://localhost/mini_board/src/board_update.php?board_no=1
// ex) http://localhost/mini_board/src/board_update.php?board_no=1&key1=10 //키값도 넘겨주기 가능

// 1-2 form tag를 이용하는 방법

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="form,get-httpGet.php">
        <input type="text" name="test1" value="testValue1">
        <input type="text" name="test2" value="testValue2">
        <button type="submit">Submit</button>
    </form>
    <!-- http://localhost/form,get.php?test1=testValue1 -->
    <br>
    <br>
    <br>
    <a href="http://localhost/form,get-httpGet.php">A태그</a>
</body>
</html>
<?php

    //1. get method로 http request를 함 
    //2. 입력한 데이터의 상세 내역은 아래와 같다.
    // 2-1 key: id, pw, name, birth_date

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
    <form method="get" action="http-get-method-httget.php">
        <label for="id1">id</label>
        <input type="text" name="id1">
        <br>
        <label for="name1">name</label>
        <input type="text" name="name1" >
        <br>
        
    </form>
    <form method="post" action="http-get-method-httget.php">
    <label for="pw1">pw</label>
        <input type="password" name="pw1">
        <br>
        <label for="birthdate1">birth_date</label>
        <input type="date" name="birth_date1">
        <button type="submit">제출</button>
    </form>
</body>
</html>
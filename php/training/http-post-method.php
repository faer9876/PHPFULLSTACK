<?php

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
    <form method="post" action="http-post-method-http.php">
        <label for="id">id</label>
        <input type="text" name="id">
        <br>
        <label for="pw">pw</label>
        <input type="password" name="pw">
        <br>
        <label for="name">name</label>
        <input type="text" name="name">
        <br>
        <label for="birth_date">birth_date</label>
        <input type="date" name="birth_date">
        <br>
        <input type="hidden" name="h_page">
        <br>
        <input type="hidden" name="val : h1">
        <button type="submit">SUB</button>
    </form>
</body>
</html>
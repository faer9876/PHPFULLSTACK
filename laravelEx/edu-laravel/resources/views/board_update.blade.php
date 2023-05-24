   <!DOCTYPE html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="common2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
        <title>게시판 수정</title>
        <link rel="stylesheet" href="common2.css">
    </head>

</head>

<body>
<table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>게시글 번호<p></p></td>
            </tr>
            <tr>
                <td>작성일<p></td>
            </tr>

        </thead>
        <tbody>
            <form method="post" action="board_update.php">
            <tr>
                <td><label for="title2">수정할 제목</label>
                <input type="text" name="board_title" id="title2">
                </td>
            </tr>
            <tr>
                <td><label for="contents2">수정할 내용</label>
                <input type="text" name="board_contents" id="contents2">
                </td>
            </tr>
        </form>
        </tbody>
    </table>
    <div id="container">
        <button type="submit" class="btn btn-outline-dark">수정</button>
        <button type="submit" id="ma" class="btn btn-outline-dark">
        <a href="">
                취소
            </a>
            </button>
            <button class="btn btn-outline-dark">
                <a href="">리스트</a>
            </button>
    </div>

</body>
</html>

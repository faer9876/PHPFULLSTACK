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
        <title>게시판 보기</title>
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
                <td>작성일<p></p></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="sub">게시글 제목<p></p></td>
            </tr>
            <tr>
                <td>게시글 내용<p id="info"></p></td>
            </tr>
        </tbody>
    </table>
    <div id="container">
    <button type="button" class="btn btn-outline-dark">
        <a href="">
            수정
        </a>

    </button>
    <button type="button" class="btn btn-outline-dark">
        <a href="">
            취소
        </a>
    </button>
    <button class="btn btn-outline-dark">
                <a href="">리스트</a>
            </button>
    <button type="button" class="btn btn-outline-dark" id="w">
        <a href="">
            삭제
        </a>
    </button>
</body>
</html>

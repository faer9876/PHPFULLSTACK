
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="common2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">

</head>
<body>
<form method="post" action="board_insert.php">
        <br>
        <table class="table table-striped table-hover">
            <tr>
                <td><label for="title">게시글 제목</label><br>
                    <input type="text" name="board_title" id="title"></td>
            </tr>
            <tr>
                <td><label for="contents" id="bor">게시글 내용</label><br>
                    <input type="text" name="board_contents" id="contents"></td>
            </tr>
            </table>
            <br>
            <br>
            <br>
            <div id="con">
            <button type="submit" class="btn btn-outline-dark">
                    작성
            </button>
            <button type="button" class="btn btn-outline-dark">
                <a href="">
                    취소
                </a>
            </button>
            </div>

        </form>

</body>
</html>

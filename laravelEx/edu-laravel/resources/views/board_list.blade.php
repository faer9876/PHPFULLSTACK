<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
</head>
<style>
/* customizable snowflake styling */
    .snowflake {
    color: #fff;
    font-size: 1em;
    font-family: Arial, sans-serif;
    text-shadow: 0 0 5px #000;
    }

</style>
<div id="back">
    <div id=nav>
            <h3>
                Beom Lab.
            </h3>
            <nav>
                <ul>
                    <li id='l1'><a href="#" id=a1> 위젯 </a></li>
                    <div class="snowflake">
                        ❅
                    </div>
                    <li id='l2'><a href="#"> HOME </a></li>
                    <li id='l3'><a href="#"> 마이페이지 </a></li>
                </ul>
            </nav>
    </div>
        <nav class="navbar navbar-expand-lg bg-light" id=contain>
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">게시판 카테고리</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">자유게시판</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">리뷰게시판</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" id=ll1>Action</a></li>
            <li><a class="dropdown-item" href="#" id=ll2>Another action</a></li>
            <li><a class="dropdown-item" href="#" id=ll3>Something else here</a></li>
            </ul>
        </li>
        </ul>
    </div>
    </div>
    </nav>
<body class='p-3 mb-2 bg-light text-dark'.bg-success>

    <br>
    <br>
    <button type="button" id="rg" class="btn btn-outline-dark"><a href="{{ route('board_insert.store') }}">글쓰기</a></button>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>제목</th>
                <th>작성일</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    @foreach ($board as $value)
        <span>{{ 'board_no : '.$value->board_no }}</span>
    @endforeach
</body>

</div>
</html>

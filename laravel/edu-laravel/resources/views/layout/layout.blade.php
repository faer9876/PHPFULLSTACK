<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title','부모타이틀')</title>
</head>
<body>
    {{-- 다른 템플릿을 포함하는 방법 --}}
    {{-- 자식 템플릇에 해당하는 section에게 자리를 양보, 만약에 자식 템플릇에 해당 sectio이 없으면 2번째 인수를 사용 --}
    {{-- 부모 템플릿에 해당 section이 없으면 2번째 인수 반환} --}}
    @include('layout.inc.header')
    @yield('contents')

    {{--@section~@show 자식 템플릿에 해당 section이 정의되어 있지 않으면 부모의 것이 실행 --}}
    @section('test')
        <h2>부모의 섹션 입니다.</h2>
        <p>부모</p>
    @show

    {{-- 2번째 인수로 값을 셋팅하고, 해당 파일에서 변수로써 사용 가능 --}}
    @yield('if')
    @yield('for')
    @yield('foreach')
    @yield('forelse')
    
    @include('layout.inc.footer',['key1'=>'key1로 셋팅'])
</body>
</html>
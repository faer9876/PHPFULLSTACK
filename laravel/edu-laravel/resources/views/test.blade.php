<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests</title>
</head>

<body>
    <h1>Test.index</h1>
    <!-- 블레이드 호출 -->
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index')}}">Tasks.index</a>
    <br>
    <a href="{{route('tasks.show',['task'=>13])}}">Tasks.show</a>
    <br>
    <form action="{{route('tasks.update',['task'=>14])}}" method="post">
    @csrf
    @method('put')
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
    <button type="submit">Tasks.update</button>
    </form>
    <br>
{{-- GET|HEAD        tasks/{task}/edit ... tasks.edit › TasksContorller@edit   --}}
    <a href="{{route('tasks.edit',['task'=>999])}}">Tasks.edit</a>
    <br>
    <form action="{{route('tasks.store')}}" method="post">
    @csrf
    @method('post')
        <input type="text" name="id" value="php506">
        <input type="text" name="pw" value="506">
        <button type="submit">Tasks.store</button>
    </form>
</body>

</html>
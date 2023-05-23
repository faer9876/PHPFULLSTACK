{{-- 상속 --}}
@extends('layout.layout')

@section('title','자식 타이틀')


{{-- 처리해야하는 코드가 많을 경우에는, @section~@endsection 에 소스코드를 기재 --}}
@section('contents')
<h2>콘텐츠 섹션 입니다.</h2>
<p>아아</p>
<p>끝</p>
@endsection


@section('test')
        <h2>자식의 섹션 입니다.</h2>
        <p>자식</p>
@endsection

{{-- 조건문 if--}}
@section('if')
<hr>
<h5>if</h5>
@if($data['gender']==='남자')
    <span>남자</span>
@elseif($data['addr']==='대구')
    <span>대구</span>
@else
    <span>모든 조건 미일치</span>
@endif
@endsection


@section('for')
<hr>
<h5>for</h5>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{-- foreach와 forelse의 경우, $loop변수가 생성되고 사용 할 수 있다. --}}
@section('foreach')
<hr>
<h5>foreach</h5>
    @foreach($data as $key => $val)
        {{-- <span>{{$key.' : '.$val}}</span> --}}
        <span>{{$loop->count.' >> '.$loop->iteration}}</span>
        <span>{{$key.' : '.$val}}</span>
        <br>
    @endforeach
@endsection


@section('forelse')
<h5>forelse</h5>
    @forelse($data2 as $key => $val)
        <span>{{$key.' : '.$val}}</span>
    @empty
        <span>empty arrary.</span>
    @endforelse
@endsection
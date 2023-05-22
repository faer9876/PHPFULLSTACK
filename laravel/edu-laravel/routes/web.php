<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { //method get
    return view('welcome');
});




//---------------------
//라우트 정의
//---------------------
//문자열 리턴
Route::get('/hi', function () { 
    return 'hi';
});


///뷰 리턴 파일 없으면 에러발생 env, false로 변경
Route::get('/myview', function () { 
    return view('myview');
});

//--------------------------
// http 메소드 대응하는 라우터
// 여러 라우터에 해당 될 경우 가장 마지막에 정의된 것이 실행
//--------------------------

// 모든 요청에 대한 처리
Route::any('/method', function(){
    return 'ANY Method';
});
Route::get('/home', function () { 
    return view('home');
});
//get 요청에 대한 처리
Route::get('/method', function () { 
    return 'GET Meothod!~';
});



//post 요청에 대한 처리
Route::post('/method', function () { 
    return 'POST Meothod!~';
});


// put 요청에 대한 처리
Route::put('/method', function(){
    return 'PUT Method';
});


// delete 요청에 대한 처리
Route::delete('/method', function(){
    return 'Delete Method';
});


// 특정 여러 메소드 요청에 대한 처리
Route::match(['get','post'],'/method', function(){
    return 'MATCH Method';
});



//------------------------
// 라우터에서 파라미터 제어
//------------------------
// 쿼리 스트링으로 파라미터 획득
Route::get('/query',function(Request $request){
    return $request->id." ".$request->name; 
});


// URL 세그먼트로 지정 파라미터 획득
Route::get('/segment/{id}', function($id){
    return 'segment ID :'.$id;
});


// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
Route::get('/segment2/{id?}',function($id='base'){
    return 'segment ID2 :'.$id;
});

//세그먼트 파라미터가 없어소 404에러 발생 안함
Route::get('/segment2/{id?}',function(Request $request){
    return 'segment ID2 :'.$requets->id;
});


//------------------
// 라우트의 이름 지정
//------------------
Route::get('/names/home', function(){
    return view('nameshome');
});

Route::get('/names', function(){
    return 'name.index !!!';
})->name('names.index');



//-----------------------------------
// 라우트 매칭 실패시 대체 라우트 정의
//-----------------------------------
Route::fallback(function(){
    return '잘못된 경로 입력';
});

//--------------------------
// 라우트의 그룹 및 공통경로 설정
//--------------------------
// 공통경로
Route::middleware('auth')->prefix('users')->group(function(){
    Route::get('/login',function(){
        return 'Login!!';
    })->name('users.login');
    Route::get('/logout',function(){
        return 'Logout!!';
    })->name('users.logout');
    Route::get('/registration',function(){
        return 'Registration!!';
    })->name('users.registration');
});




//------------------
// 서명 라우터
//------------------
use Illuminate\Support\Facades\URL;
Route::get('makesign',function(){
    // 일반 url 링크 생성하기
    $baseUrl = route('sign');
 
    // 서명된 url 링크 생성하기
    // $signUrl= URL::signedRoute('invitations',['invitation'=> 5816, 'group'=>678]);
    $signUrl= URL::signedRoute('sign');
    // 유효기간이 있는 서명된 URL 링크 생성하기
    $limiteSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10));
    return $baseUrl."<br><br>".$signUrl."<br><br>".$limiteSignUrl;
    // return $baseUrl."<br><br>".$limiteSignUrl;
});

Route::get('/sign', function(){
    return 'Sign!';
})->name('sign')->middleware('signed');
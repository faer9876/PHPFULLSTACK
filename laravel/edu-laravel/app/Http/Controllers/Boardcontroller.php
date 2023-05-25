<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Boardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // -------------
        // 쿼리 빌더
        // -------------
        // $result = DB::select('select * from categories');
        // $no =5;
        // $result = DB::select('select * from categories where no = :no',['no'=>$no]);
        //key로 지정해서 where가져오는 법


        // $result = DB::select('select * from categories where no = ? and no = ?',[$no,7]);
        // ?로 지정해서 where가져오는 법

        // $input = ['4','7','8'];
        //categories의 no 컬럼
        // 게시글 제목, 게시글 번호, 카테고리명을 출력
        // 오름차순 정렬 후 상위 5개

            // $result = DB::select('SELECT bo.bno, bo.btitle, bo.category FROM categories AS ca INNER JOIN boards AS bo ON ca.no = bo.category where bo.category in(?,?,?) ORDER BY bo.bno ASC LIMIT 5', $input);
            // var_dump($result);

        // $result = DB::insert('INSERT INTO boards(category,btitle,bcontents,created_at,updated_at)values(:category,:btitle,:bcontents,:created_at,:updated_at)',[':category'=>'1'
        //                 ,':btitle'=>'박박'
        //                 ,':bcontents'=>'밥밥밥'
        //                 ,':created_at'=>now()
        //                 ,':updated_at'=>now()
        //             ]
        //         );

        // $result = DB::update('update boards set btitle=:btitle, bcontents=:bcontents, updated_at=:updated_at where bno=:bno',["test","testtest",now(),90001]);

        // var_dump($result);
        // $result = DB::delete('delete from boards where bno=:bno',[90001]);

        // var_dump($result);

        //---------------
        //쿼리 빌더 체이닝
        //---------------
        $no='5';
        $no2='-1';
        // $result=DB::table('categories')->where('no','=',$no)->get();//todo 삭제 예쩡

        //부등호 = 일시 생략 가능
        // $result=DB::table('categories')->where('no',$no)->orWhere('no',$no2)->get();

        // $result =DB::table('categories')->whereIn('no',[$no,$no2])->dd();

        $result =DB::table('categories')->whereNotIn('no',[$no,$no2])->get();


        // select id, no, name from categories
        // $result = DB::table('categories')->select('id','no','name')->dd();

        // select id,no,name from categories order by name desc
        // $result = DB::table('categories')->select('id','no','name')->orderBy('name','desc')->dd();
        //where 구문을 계속 -> 해주면 and 연산이 됨!

        // *** 주의해서 사용 조차 하지 않는것을 추천 *** whereRaw() //prepare statment로 들어가지 않고 string으로 들어감
        // $result=DB::table('categories')->whereRaw('no='.$no);

        // first() 해당 쿼리에서 limit=1 것과 비슷한 작동 ㅎ 실패시 false 발생
        $result=DB::table('boards')->orderBy('bno','DESC')->first();

        //firstOrFail() : first() 같은 동작을 하는데, 실패시 결과가 예외 발생 eloquent(라라벨의 orm)에서만 사용 가능
        // $result=DB::table('boards')->orderBy('bno','DESC')->firstOrFail();
        // Board::orderBy('bno','desc')->firstOrFail();

        //집계 method
        // $result=DB::table('boards')->count();//결과의 레코드 수 반환
        // $result=DB::table('boards')->max('bno');//해당 컬럼의 최대값 반환

        // 트랜잭션
        // DB::beginTransaction();//시작

        // DB::rollBack();
        // DB::commit();// 완료되면 커밋

        // 카테고리가 활성화 되어 있는 게시글의 카테고리별 갯수를 출력 .(카테고리번호, 카테고리명, 개수)

        $result = DB::table('categories')
        ->select(DB::raw('categories.no, categories.name, COUNT(bno) AS board_count'))
        ->join('boards', 'categories.no', '=', 'boards.category')
        ->where('activ_flg', 1)
        ->groupBy('categories.no', 'categories.name')
        ->get();


        return var_dump($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use App\A;
use App\B;
use App\Model\Dao\ClinicMrDetailDao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->get('query');
        $paginator = [];
        if ($q) {
            $paginator = Post::search($q)->paginate();
        }

        return view('search', compact('paginator', 'q'));
    }

    public function test()
    {

        //DB::table('b')->insert(['date' => 'aaaa']);
        /*DB::beginTransaction();
        $data['b'] = 4;

        $res = DB::table('a')->insert($data);
        $rr = DB::table('b')->update(['date' => 5]);
        //dd($rr);
        if ($res && $rr) {
            DB::commit();
        } else {
            DB::rollBack();
        }*/

        /*DB::transaction(function(){
            $data['b'] = 5;
            DB::table('a')->insert($data);
            $a = rand(1, 9);
            //update 修改的值不变时,返回0,上一条继续插入
            DB::table('b')->update(['date' => 5]);
        });*/

        $a = new A;
        $b = new B;
        $c = new ClinicMrDetailDao;

//        $a->a_add();
//        $b->b_add();
//        $data['depart_code'] = '0001';
//        $c->saveMrDetail($data);

        $a->a_in();
        $b->b_in();
        /*DB::transaction(function() use($a, $b){
            //$data['b'] = 8;
            //$dd['date'] = 9;
            $a->a_in();
            $b->b_in();
        });*/
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/29
 * Time: 13:52
 */
namespace App\Http\Controllers;

use App\Model\Dict\DictForSyndrome;
use App\Model\Dict\DictParticiple;
use Illuminate\Http\Request;

class DictParticipleController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->get('query');
        $paginator = [];
        if ($q) {
            $paginator = DictParticiple::search($q)->paginate();
        }
        dump($paginator);
        return view('search', compact('paginator', 'q'));
    }
    public function search1(Request $request)
    {
        $q = $request->get('query');
        $paginator = [];
        if ($q) {
            $paginator = DictForSyndrome::search($q)->paginate();
        }
        dump($paginator);
        return view('search', compact('paginator', 'q'));
    }
}
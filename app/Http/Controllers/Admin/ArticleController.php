<?php

namespace App\Http\Controllers\Admin;

use App\Model\Service\ArticleService;
use App\Model\Service\CaseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    /**文章主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $article = new ArticleService();
        //获取文章列表
        $artList = $article->getAdminArticleList();
        //获取文章数量
        $num = count($artList);

        return view('Admin.Article.Index')
            ->with('list',$artList)
            ->with('num',$num);
    }

    /**文章添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        $type = new CaseService();

        $list = $type->getTypeList(2);
        return view('Admin.Article.add')
            ->with('list',$list);
    }

    /**执行文章添加
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doAdd(Request $request){
        $article = new ArticleService();
        //获取传递过来的输入内容
        $inf = $request->all();
        //获取上传图片
        $pic = $request->file('artPic');

        if($pic){
            //得到图片名
            $name=$pic->getClientOriginalName();
            //得到图片后缀
            $ext=$pic->getClientOriginalExtension();
            $fileName=md5(uniqid($name));
            //生成新的的文件名
            $fileName=$fileName.'.'.$ext;
            $bool=\Storage::disk('pic')->put($fileName,file_get_contents($pic->getRealPath()));
            //返回文件路径存贮在数据库
            $picUrl='storage/upload/'.$fileName;

            $addRes = $article->addArticle($inf['title'],$inf['introduction'],$inf['content'],$inf['type'],$picUrl,$inf['recommend']);

            if($addRes !== false && $bool){
                return response()->json('添加成功');
            }else{
                return response()->json('添加失败！');
            }
        }else{
            return response()->json('请添加图片！');
        }
    }

    /**文章编辑页面
     * @param $id
     * @return $this
     */
    public function edit($id){
        $article = new ArticleService();
        $type = new CaseService();

        $list = $type->getTypeList(2);

        $article = $article->getSingleArticle($id);

        return view('Admin.Article.edit')
            ->with('art',$article)
            ->with('list',$list);
    }

    /**执行文章编辑
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doEdit(Request $request){
        $article = new ArticleService();
        //获取传递过来的内容
        $param = $request->all();

        //获取上传图片
        $pic = $request->file('artPic');
        if($pic){
            //得到图片名
            $name=$pic->getClientOriginalName();
            //得到图片后缀
            $ext=$pic->getClientOriginalExtension();
            $fileName=md5(uniqid($name));
            //生成新的的文件名
            $fileName=$fileName.'.'.$ext;
            $bool=\Storage::disk('pic')->put($fileName,file_get_contents($pic->getRealPath()));
            //返回文件路径存贮在数据库
            $picUrl='storage/upload/'.$fileName;
        }else{
            $picUrl = '';
            $bool = 1;
        }


        $res = $article->editArticle($param['id'],$param['title'],$param['introduction'],$param['content'],$param['type'],$picUrl,$param['recommend']);

        if($res !== false && $bool){
            return response()->json('修改成功');
        }else{
            return response()->json('修改失败！');
        }
    }

    /**删除单条文章
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delSingleArticle(Request $request){
        $article = new ArticleService();
        //获取传递过来的id
        $id = $request->get('id');

        $res = $article->delSingle($id);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }

    /**删除多条文章
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delMoreArticle(Request $request){
        $article = new ArticleService();
        //获取传递过来的id
        $id = $request->get('ids');

        $res = $article->delMore($id);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }
}

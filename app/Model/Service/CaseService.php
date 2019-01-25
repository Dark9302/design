<?php

namespace App\Model\Service;

use App\Model\Dao\ArticleDao;
use App\Model\Dao\CaseDao;
use App\Model\Dao\CaseTeamDao;
use App\Model\Dao\DictDictDao;
use Illuminate\Database\Eloquent\Model;

class CaseService extends Model
{
    /**获取案例列表
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCaseList(){
        $case = new CaseDao();

        $list = $case->getCaseList();

        return $list;
    }

    /**获取前台案例列表
     * @param $type
     * @return array
     */
    public function getCaseListQt($type){
        $case = new CaseDao();
        $dict = new DictDictDao();
        //组合查询条件
        $con['type'] = $type;
        //获取案例列表
        $list = $case->getCaseListByCon($con);

        //获取案例类型
        $dictCon['id'] = $type;
        $typeRes = $dict->getSingleDict($dictCon);

        return array('list'=>$list,'type'=>$typeRes);
    }

    /**获取单个案例
     * @param $id
     * @return Model|null|static
     */
    public function getSingleCase($id){
        $case = new CaseDao();

        //组合查询条件
        $con['id'] = $id;

        $res = $case->getSingleCase($con);

        return $res;
    }

    /**添加案例
     * @param $title
     * @param $type
     * @param $content
     * @param $information
     * @param $area
     * @param $pic1
     * @param $pic2
     * @param $pic3
     * @param $price
     * @param $address
     * @return int
     */
    public function addCase($title,$type,$content,$information,$area,$pic1,$pic2,$pic3,$price,$address){
        $case = new CaseDao();
        //组合添加条件
        $data['title'] = $title;
        $data['type'] = $type;
        $data['content'] = $content;
        $data['information'] = $information;
        $data['area'] = $area;
        $data['pic1'] = $pic1;
        $data['pic2'] = $pic2;
        $data['pic3'] = $pic3;
        $data['price'] = $price;
        $data['address'] = $address;

        $addRes = $case->addCase($data);

        return $addRes;
    }

    /**编辑案例
     * @param $id
     * @param $title
     * @param $type
     * @param $content
     * @param $information
     * @param $area
     * @param $pic1
     * @param $pic2
     * @param $pic3
     * @param $price
     * @param $address
     * @return bool
     */
    public function editCase($id,$title,$type,$content,$information,$area,$pic1,$pic2,$pic3,$price,$address){
        $case = new CaseDao();
        //组合添加条件
        $con['id'] = $id;
        $data['title'] = $title;
        $data['type'] = $type;
        $data['content'] = $content;
        $data['information'] = $information;
        $data['area'] = $area;
        $data['price'] = $price;
        $data['address'] = $address;
        if($pic1){
            $data['pic1'] = $pic1;
        }
        if($pic2){
            $data['pic2'] = $pic2;
        }
        if($pic3){
            $data['pic3'] = $pic3;
        }

        $upRes = $case->upCase($con,$data);

        return $upRes;
    }

    /**删除单条案例
     * @param $id
     * @return bool|null
     */
    public function del($id){
        $case = new CaseDao();
        //组合删除条件
        $con['id'] = $id;
        $del = $case->delCase($con);

        return $del;
    }

    /**删除多条案例
     * @param array $data
     * @return bool|null
     */
    public function delMore(array $data){
        $case = new CaseDao();

        $del = $case->delMoreCase($data);

        return $del;
    }

    /**装修案例上一条和下一条
     * @param $id
     * @param $type
     * @return array
     */
    public function getPreAndNext($id,$type){
        $case = new CaseDao();

        $pre = $case->perOne($id,$type);

        $next = $case->nextOne($id,$type);

        return array('pre'=>$pre,'next'=>$next);
    }

    /**top
     * @param $num
     * @return mixed
     */
    public function getTopN($num){
        $case = new CaseDao();

        $res = $case->getTopN($num);

        return $res;
    }

    /**top
     * @param $num
     * @param $type
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getTopNByType($num,$type){
        $case = new CaseDao();

        $res = $case->getTopNByType($num,$type);

        return $res;
    }

    /**********************分类***************************/
    /**分类列表
     * @param $type
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getTypeList($type){
        $dict = new DictDictDao();

        //组合查询条件
        $con['type'] = $type;
        $res = $dict->getDictList($con);

        return $res;
    }

    /**获取所有分类
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllType(){
        $dict = new DictDictDao();

        $res = $dict->getAll();

        return $res;
    }

    /**添加分类
     * @param $title
     * @param $type
     * @return bool
     */
    public function addType($title,$type){
        $dict = new DictDictDao();

        //组合添加条件
        $data['title'] = $title;
        $data['type'] = $type;

        $res = $dict->addDict($data);

        return $res;
    }

    /**删除分类
     * @param $id
     * @return bool|null
     */
    public function delSingleType($id){
        $dict = new DictDictDao();
        $case = new CaseDao();
        $art = new ArticleDao();

        //组合删除条件
        $con['type'] = $id;

        //判断该类型下是否有对应案例
        $case = $case->getSingleCase($con);
        $article = $art->getSingleArticle($con);
        if($case || $article){
            $delRes = false;
        }else{
            $delCon['id'] = $id;
            $delRes = $dict->delDict($delCon);
        }

        return $delRes;
    }

    /**批量删除分类
     * @param array $data
     * @return bool|null
     */
    public function delMoreType(array $data){
        $dict = new DictDictDao();
        $case = new CaseDao();

        //判断该类型下是否有对应案例
        $case = $case->getMoreCase($data);
        if($case->isEmpty()){
            $delRes = $dict->delMoreDict($data);
        }else{
            $delRes = false;
        }

        return $delRes;
    }

    /**添加案例和设计师关系
     * @param $caseId
     * @param $desIds
     * @return bool
     */
    public function addCaseAndDes($caseId,$desIds){
        $case = new CaseTeamDao();
        //将设计师id转数组
        $desArray = explode(',',$desIds);
        //组合新数组
        $caseAndDesArray = [];

        foreach ($desArray as $key=>$val){
            $caseAndDesArray[$key]['case_id'] = $caseId;
            $caseAndDesArray[$key]['team_id'] = $val;
        }

        $addRes = $case->add($caseAndDesArray);

        return $addRes;
    }

    /**更新设计师和案例关系表
     * @param $caseId
     * @param $desIds
     * @return bool
     */
    public function upCaseAndDes($caseId,$desIds){
        $case = new CaseTeamDao();
        //组合查询条件
        $con['case_id'] = $caseId;
        $caseRes = $case->getInf($con);
        if(!$caseRes->isEmpty()){
            $delRes = $case->del($con);
        }else{
            $delRes = 1;
        }
        $addRes = $this->addCaseAndDes($caseId,$desIds);

        if($delRes && $addRes !== false){
            return true;
        }else{
            return false;
        }
    }

    /**获取设计师id
     * @param $caseId
     * @return string
     */
    public function getCaseDesigner($caseId){
        $case = new CaseTeamDao();

        $con['case_id'] = $caseId;
        $res = $case->getInf($con);

        $teamId = '';
        //组合设计师id
        foreach ($res as $val){
            if($teamId){
                $teamId .= ','.$val->team_id;
            }else{
                $teamId = $val->team_id;
            }
        }

        return $teamId;
    }
}

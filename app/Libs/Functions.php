<?php
namespace App\Libs;

//use Illuminate\Support\Facades\DB;

/**
* 自定义方法
*/
class Functions
{
	public function index()
	{
		echo 'success';
	}

	/**
     * @param  传入要返回数据
     * @return 构造table格式数组
     */
    public function resJson($res)
    {
        $result=array(
            'code'=>0,
            'data'=>$res,
            'count'=>count($res),
            'msg'=>''
            );

        return $result;
    }

    /**
     * @param  字符串转关联数组，传入字符串返回关联数组
     */
    public function str_arr($str)
    {
        $arr = explode ( ',', $str );
        $all_arr = array ();
         
        foreach ( $arr as $v ) {
            if(empty($v)){
                continue;
            }
            $itemarr = explode ( ':', $v );
            if(count($itemarr) != 2){
                continue;
            }
            $all_arr [$itemarr[0]] = $itemarr[1];
        }
        
        return $all_arr;
    }

    /**
     * [input_code description]
     * @param  传入字符串
     * @return 返回字符串的拼音码
     */
    public function input_code($str)
    {
        $split=str_split($str,3);//汉字3个字节
        foreach ($split as $v) {
            $bsm=DB::table('dict_hzpy')->where('BHZ',$v)->first();
            $pym[]=$bsm->BSM;
        }
        $pym=implode('',$pym);

        return $pym;
    }

}


?>
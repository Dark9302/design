<?php
/**
 * Created by PhpStorm.
 * User: Miracle7.kill
 * Date: 2018/1/30
 * Time: 15:07
 * QQ:   858104107
 */
namespace App\Libs;

class getAge
{
    /**
     * @param $birthday '2017-01-12' or '2017-10-17 12:15:30'
     * @return array
     */
    public function calAge($birthday)
    {
       //dd($birthday - date('Y-m-d'));
        if ((strtotime(date('Y-m-d'))- strtotime($birthday)) <= 0)
        {
            return 0;
        }
        list($byear, $bmonth, $bday) = explode('-', $birthday);
        list($year, $month, $day) = explode('-', date('Y-m-d'));
        $bmonth = intval($bmonth);
        $bday = intval($bday);

        if ($bmonth < 10) {
            $bmonth = '0' . $bmonth;
        }
        if ($bday < 10) {
            $bday = '0' . $bday;
        }

        $bi = intval($byear.$bmonth.$bday);
        $ni = intval($year.$month.$day);
        $not_birth = 0;

        if ($bi > $ni) {
            $not_birth = 1;
            $tmp = [$byear, $bmonth, $bday];
            list($byear, $bmonth, $bday) = [$year, $month, $day];
            list($year, $month, $day) = $tmp;
            list($bi, $ni) = [$ni, $bi];
        }

        $years = 0;
        while(($bi + 10000) <= $ni) {
            $bi += 10000;
            $years++;
            $byear++;
        }

        list($m, $d) = $this->getMD([$year, $month, $day], [$byear, $bmonth, $bday]);
        if ($years < 6) {
            return [
                'year' => $years,
                'month' => $m,
                'day' => $d
            ];
        } else {
            return ['year' => $years];
        }

    }

    public function getMD($ymd, $bymd)
    {
        list($y, $m, $d) = $ymd;
        list($by, $bm, $bd) = $bymd;
        if (($m . $d) < ($bm . $bd)) {
            $m += 12;
        }
        $month = 0;
        while((($bm . $bd) +100) < ($m . $d)) {
            $bm ++;
            $month ++;
        }
        if ($bd <= $d) {
            $day = $d - $bd;
        } else {
            $mdays = $bm > 12 ? $this->_getMonDay(++$by, $bm - 12) : $this->_getMonDay($by, $bm);
            $day = $mdays - $bd + $d;
        }
        return [$month, $day];
    }

    private function _getMonDay($year, $month)
    {
        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $day = 31;
                break;
            case 2:
                $day = intval($year % 4) ? 28 : 29;
                break;
            default:
                $day = 30;
                break;
        }

        return $day;
    }

    /**获取患者年龄的XX岁XX月XX天
     * @param $birthVal  '2017-01-12' or '2017-10-17 12:15:30'
     * @return string
     */
    public function getAge($birthVal){
        $birth = $this->calAge($birthVal);

        $birthDate = '';

        if(isset($birth['year']) && $birth['year'] != '0'){
            $birthDate .= $birth['year'].'岁';
            if($birth['year'] < '6' && $birth['year'] > '0'){
                if(isset($birth['month']) && $birth['month'] != '0'){
                    $birthDate .= $birth['month'].'月';
                }else if(isset($birth['day']) && $birth['day'] != '0'){
                    $birthDate .= $birth['day'].'天';
                }
            }
        }else{
            if(isset($birth['month']) && $birth['month'] != '0'){
                $birthDate .= $birth['month'].'月';
            }if(isset($birth['day']) && $birth['day'] != '0'){
                $birthDate .= $birth['day'].'天';
            }
        }

        return $birthDate;
    }
}
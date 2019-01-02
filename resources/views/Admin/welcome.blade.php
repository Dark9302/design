@extends('Admin.Base')
@section('css')
    @parent
@endsection
@section('content')
    <div class="page-container">
        <p class="f-20 text-success">欢迎使用中医健康后台管理系统！</p>
        <p>上次登录IP：{$Think.session.last_loginip}  上次登录时间：{$Think.session.last_logintime|date='Y-m-d H:i:s',###}</p>
        <table class="table table-border table-bordered table-bg">
            <thead>
            <tr>
                <th colspan="7" scope="col">信息统计</th>
            </tr>
            <tr class="text-c">
                <th>统计</th>
                <th>注册用户</th>
                <th>直播节目</th>
                <th>发布视频</th>
                <th>发布文章</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td>总数</td>
                <td>{$totalUser}</td>
                <td>{$totaolLive}</td>
                <td>{$totaolVideo}</td>
                <td>{$totaolDynamic}</td>
            </tr>
            <tr class="text-c">
                <td>今日</td>
                <td>{$curDayUser}</td>
                <td>{$curDayLive}</td>
                <td>{$curDayVideo}</td>
                <td>{$curDayDynamic}</td>
            </tr>
            <tr class="text-c">
                <td>昨日</td>
                <td>{$yesterDayUser}</td>
                <td>{$yesterDayLive}</td>
                <td>{$yesterDayVideo}</td>
                <td>{$yesterDayDynamic}</td>
            </tr>
            <tr class="text-c">
                <td>本周</td>
                <td>{$lastWeekUser}</td>
                <td>{$lastWeekLive}</td>
                <td>{$lastWeekVideo}</td>
                <td>{$lastWeekDynamic}</td>
            </tr>
            <tr class="text-c">
                <td>本月</td>
                <td>{$lastMonthUser}</td>
                <td>{$lastMonthLive}</td>
                <td>{$lastMonthVideo}</td>
                <td>{$lastMonthDynamic}</td>
            </tr>
            </tbody>
        </table>
        <table class="table table-border table-bordered table-bg mt-20">
            <thead>
            <tr>
                <th colspan="2" scope="col">服务器信息</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th width="30%">系统类型及版本号</th>
                <td><span id="lbServerName"><?php echo php_uname(); ?></span></td>
            </tr>
            <tr>
                <td>服务器IP地址</td>
                <td></td>
            </tr>
            <tr>
                <td>服务器域名</td>
                <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
            </tr>
            <tr>
                <td>服务器端口</td>
                <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
            </tr>
            <tr>
                <td>服务器解译引擎</td>
                <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
            </tr>
            <tr>
                <td>PHP运行方式</td>
                <td><?php echo $_SERVER['GATEWAY_INTERFACE']; ?></td>
            </tr>
            <tr>
                <td>服务器脚本超时时间</td>
                <td><?php echo ini_get('max_execution_time'); ?>秒</td>
            </tr>
            <tr>
                <td>服务器最大上传</td>
                <td><?php echo ini_get('post_max_size'); ?></td>
            </tr>
            <tr>
                <td>服务器POST最大值</td>
                <td><?php echo ini_get('post_max_size')?></td>
            </tr>
            <tr>
                <td>服务器运行最大内存 </td>
                <td><?php echo ini_get('memory_limit'); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('publicJs')
    @parent
@endsection
@section('js')
@endsection
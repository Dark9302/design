/**
 * Created by dark on 2017-06-21.
 */
//是直播课程，显示时间选项
$("#y-online").click(function(){
    if($(this).is(":checked")){
        $(".onlineTime").show(function(){});
    }
})
//不是直播课程不显示时间选项
$("#n-online").click(function(){
    if($(this).is(":checked")){
        $(".onlineTime").hide(function(){});
    }
})
/*开始日期、结束日期*/
var start = {
    format: 'YYYY-MM-DD hh:mm:ss',
    minDate: '2014-06-16 23:59:59', //设定最小日期
    ishmsVal:false,
    //maxDate: $.nowDate({DD:0}), //最大日期为当前日期
    choosefun: function(elem, val, date){
        end.minDate = date; //开始日选好后，重置结束日的最小日期
        endDates();
    }
};
var end = {
    format: 'YYYY-MM-DD hh:mm:ss',
    //minDate: $.nowDate({DD:0}), //设定最小日期为当前日期
    maxDate: '2099-06-16 23:59:59', //最大日期
    choosefun: function(elem, val, date){
        start.maxDate = date; //将结束日的初始值设定为开始日的最大日期
    }
};
//这里是日期联动的关键
function endDates(){
    //将结束日期的事件改成 false 即可
    end.trigger = false;
    $("#endDate").jeDate(end);
}
$('#startDate').jeDate(start);
$('#endDate').jeDate(end);
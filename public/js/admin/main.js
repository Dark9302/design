/**
 * Created by dark on 2017-06-13.
 */
function product_add(title,url){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*
 参数解释：
 title	标题
 url		请求的url
 id		需要操作的数据id
 w		弹出层宽度（缺省调默认值）
 h		弹出层高度（缺省调默认值）
 */
/*增加*/
function add(title,url,w,h){
    layer_show(title,url,w,h);
}
/*删除单条记录
 * id：要删除的记录主键
 * url：ajax路径
 * */
function del(obj,id,url){
    layer.confirm('确认要删除吗？',function(index){
        $.web.ajax(url,{'id':id}).done(function (data) {
            if(data=='删除成功'){
                $(obj).parents("tr").remove();
                var num=$('#strong').html();
                $('#strong').html(num-1);
                layer.msg('已删除!',{icon:1,time:1000});
            }else{
                layer.alert(data,{icon:5});
            }
        });
    });
}
/*
 删除多条记录
 url：ajax路径
 cla：复选框类名
 */
function delMore(url,cla){
    var i=0;
    var ids=new Array();
    /*组合id数组*/
    $("."+cla).each(function(){
        if($(this).is(":checked")){
            var orgid=$(this).parent('td').next('td').html();
            ids[i]=orgid;
            i++;
        }
    })
    if(ids[0]){
        layer.confirm('确认要删除吗？',function(index){
            $.web.ajax(url,{'ids':ids}).done(function (data) {
                if(data=='删除成功'){
                    location.reload();
                }else{
                    layer.alert(data,{icon:5});
                }
            });
        })
    }else{
        layer.alert('未检测到选中项',{icon:5});
    }
}
function delMore1(url,cla){
    var i=0;
    var ids=new Array();
    /*组合id数组*/
    $("."+cla).each(function(){
        if($(this).is(":checked")){
            var orgid=$(this).parent('td').next('td').children('a').html();
            ids[i]=orgid;
            i++;
        }
    })
    if(ids[0]){
        layer.confirm('确认要删除吗？',function(index){
            $.web.ajax(url,{'id':ids}).done(function (data) {
                if(data=='删除成功'){
                    location.reload();
                }else{
                    layer.alert(data,{icon:5});
                }
            });
        })
    }else{
        layer.alert('未检测到选中项',{icon:5});
    }
}
//    var index = parent.layer.getFrameIndex(window.name);
//    parent.layer.close(index);
/*编辑*/
function edit(title,url,id,w,h){
    layer_show(title,url,w,h);
}

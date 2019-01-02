var oInit = new Object();
$.fn.Instance = {
    ajax: function(path, parma ,loadFlag){
        if(loadFlag == 1){
            //无加载状态
            oInit.queryTruckAjax = $.ajax({
                type: "POST",
                url: path,
                data: parma,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(){
                }
            });
        }else{
            //有加载状态
            // this.loading();
            oInit.queryTruckAjax = $.ajax({
                type: "POST",
                url: path,
                data: parma,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(){
                    // $.web.close();
                }
            });
        }
        return oInit.queryTruckAjax;
    },
    loading: function(){
        window.parent.loading = layer.load(1);
    },
    close: function(){
        layer.close(window.parent.loading);
    },
    limitNumber: function () {
        var $this = this;

        function replace() {
            var start, end, range, chars = $this.val().match(/\D/g);

            if (chars) {
                if ('selectionStart' in this) {     //现代浏览器
                    start = this.selectionEnd - chars.length;
                    end = this.selectionEnd - chars.length;
                    $this.val($this.val().replace(/\D/g, ''));
                    this.setSelectionRange(start, end);
                } else if ('createTextRange' in this) {   //老版本IE
                    range = document.selection.createRange();
                    range.setEndPoint('StartToStart', this.createTextRange());
                    start = range.text.length;
                    $this.val($this.val().replace(/\D/g, ''));
                    range.moveStart('character', start - chars.length);
                    range.collapse();
                    range.select();
                }
            }
        }

        if ('oninput' in document.createElement('input')) {
            this.on('input', replace);
        } else {
            //onpropertychange不靠谱，经常会失效，不使用该事件
            this.on('keyup', replace).on('paste', function (event) {
                var start, end, text, value = $this.val();

                if (!$this.is(':focus')) {  //防止选择了其他区域时复制
                    return;
                }

                if (event.originalEvent.clipboardData) {    //现代浏览器
                    /**
                     * paste事件中只能get剪切板内容，copy、cut事件中只能set剪切板内容。
                     * 并且都要event.preventDefault()才有效果
                     */
                    text = event.originalEvent.clipboardData.getData('text/plain');
                } else if (window.clipboardData) {  //老版本IE
                    //不管复制、剪切还是粘贴都可以get、set
                    text = window.clipboardData.getData('text');
                }

                text = text.replace(/\D/g, '');

                if ('selectionStart' in this) {     //现代浏览器
                    start = this.selectionStart;
                    end = this.selectionEnd;
                    $this.val(value.substring(0, start) + text + value.substring(end));
                    this.setSelectionRange(start + text.length, start + text.length);
                } else if ('selection' in document) {   //老版本IE
                    document.selection.createRange().text = text;
                }

                event.preventDefault();
            }).on('drop', function () {     //禁止拖拽内容到input元素
                return false;
            });
        }
    }
};
$.web = $.fn.Instance;
$.fn.extend($.web);


//关闭弹框
function closeFrame() {
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.close(index);
}
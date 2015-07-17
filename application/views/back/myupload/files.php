 <div>用途：可以同时上传多张图片，用于制作商品、新闻幻灯图片展示；也可以上传其他类型文件作为附件下载</div>
    <p class="line-t-10"></p>
    <a href="javascript:void(0);" onclick="attachs_select();" class="btn">上传文件</a>
<script>
//打开附件上传弹层
    function attachs_select(){
        $('#queue_attach').html('');
        C.alert.opacty({'div_tag':'#attachs_select','title':'选择文件上传','width':'560','height':'410'});
    }
</script>
<div id="attachs_select" style="display:none;">
    <div style="margin-left:26px;">
    <input id="rcon_id" type="hidden" value="">
    <input id="upload_file3" name="upload_file3" type="file"  multiple="true">
    <style>
        #upload_failed{margin:10px;}
        #upload_failed li{color:red;line-height:160%;font-size:12px;}
        .upload_botom_lists{width:470px;background:transparent;max-width:470px;padding:5px 0;overflow:hidden;}
        .upload_botom_lists .uploadify-queue-item .up_tips{margin: 0 10px;}
        .upload_botom_lists .up_tips{background:transparent;text-indent:0;margin:0 10px;line-height:normal;}
        .upload_botom_lists .uploadify-progress{margin:0 0 10px 0;}
        .upload_botom_lists .uploadify-progress,.upload_botom_lists .uploadify-progress-bar{height:8px;}
        .upload_botom_lists .uploadify-progress-bar{background-color:#19a97b;}
        .up_tips_file{color:#666;font-size:12px;display:inline-block;float:left;margin-left:10px;height:30px;line-height:30px;position:absolute;top:0;left:154px;}
        #attachs_select_list{padding:10px 0;}
        #attachs_select_list li{font-size:12px;color:#666;height:26px;line-height:26px;margin-bottom:10px;}
        #attachs_select_list li img{margin-top:2px;float:left;}
        #attachs_select_list li span{margin:0 20px 0 10px;display:inline-block;float:left;max-width:490px;height:26px;line-height:26px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;}
        #attachs_select_list li em{display:inline-block;height:20px;line-height:20px;float:left;}
    </style>
    <script>
        var attachs_html = '';
        attachs_html += '<div id="${fileID}" class="uploadify-queue-item upload_botom_lists">';
        attachs_html += '   <span class="fileName l"><em>${fileName}</em></span>';
        attachs_html += '        <div class="data up_tips point l"></div><div class="l">- ${fileSize}</div>';
        attachs_html += '	    <span class="cancel r"><a href="javascript:void(0);" onclick="upload_cancel_attachs(\'#${instanceID}\',\'${fileID}\');">删除</a></span>';
        attachs_html += '   <div class="uploadify-progress l"><div class="uploadify-progress-bar"></div></div><span class="percent_span"></span>';
        attachs_html += '</div>';
        $(function(){
            $('#upload_file3').uploadify({
                'formData': {
                    '<?php echo session_name();?>' : '<?php echo session_id();?>',
                    'timestamp':'<?php echo $timestamp;?>',
                    'token':'<?php echo md5(UPLOAD_VERIFY . $timestamp);?>',
                    'dir':'attach','thumb_width':300,'thumb_height':300

                },
                'width':122,'height':30,
                'buttonClass':'btn_class',
                'uploadLimit':20,
                'swf':'<?php echo DOMAIN_CSS;?>/libs/uploadify/uploadify.swf',
                'uploader':'<?php echo DOMAIN_UPLOAD;?>/upload/uploadify.php',
                'fileSizeLimit':'<?php echo(UPLOAD_MAX_SIZE)?>',
                'progressData':'speed',
                'queueID':'attach_list',
                'removeCompleted':false,
                'itemTemplate':attachs_html,
                'onFallback':function(){
                    alert("您未安装FLASH控件，无法上传图片！请安装FLASH控件后再试。");
                },
                //上传到服务器，服务器返回相应信息到data里
                'onUploadSuccess':function(file, data, response){
                    try{
                        var ret=$.evalJSON(data);
                        var html='<li>';
                        html+='<img src="<?php echo(DOMAIN_CSS)?>/sty_default/images/ico/'+ret.ext+'.jpg">';
                        html+='<input type="hidden" id="attach___'+ret.md5+'" value="'+ret.md5+'">';
                        html+='<span><input id="oname___'+ret.md5+'" type="text" class="comm_ipt" value="'+ret.title+'" /></span>';
                        html+='<span><input id="order___'+ret.md5+'" type="text" class="comm_ipt" value="'+($('#attachs_select_list>li').length+1)+'" style="width:50px;" /></span>';
                        html+='<em><a href="'+ret.url+'" target="_blank">查看</a>&nbsp;&nbsp;&nbsp;&nbsp;</em>';
                        html+='<em onclick="$(this).closest(\'li\').remove();" style="cursor:pointer;">删除</em></li>';
                        if(ret.code==0){
                            $('#attachs_select_list').append(html);
                        }else{
                            $('#'+file.id).find('.data').html(ret.msg).css({'color':'red'});
                        }
                    }catch(e){alert(data);}
                }
            });
        });
        
        //取消上传点击事件
        function upload_cancel_attachs(instance,file_id){
            //取消上传并删除上传进度元素
            $(instance).uploadify('cancel', file_id);
            //删除上传文件对应的属性层元素
            $('#'+file_id).remove();
            $('#attachs_select_list').find('#attach___'+file_id).closest('li').remove();
        }
    </script>
    </div>
    <div id="attach_list" style="overflow-x:auto;overflow-y:auto;width:473px;height:236px;padding:0 26px;position:relative;">

    </div>
    <p class="line-t-20"></p>
    <div style="text-align:center;">
        <a href="javascript:void(0);" class="btn" onclick="C.alert.opacty_close('#attachs_select');">上传完毕 , 确定</a>
    </div>
</div>
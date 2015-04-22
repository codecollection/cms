(function() {  
    CKEDITOR.dialog.add("upfile",   
    function(a) {  
        return {  
            title: "上传文件",  
            minWidth: "500px",  
            minHeight:"500px",  
            contents: [{  
                id: "tab1",  
                label: "",  
                title: "",  
                expand: true,  
                width: "500px",  
                height: "500px",  
                padding: 0,  
                elements: [{  
                    type: "html",  
                    style: "width:600px;height:500px;background:#fff;",
                    "html":'<div style="line-height:200%;">在此上传图片、动画、和其他系统上传设置允许的文件。</div>'
                    +'<div style="height:30px;"><b>方式1： 上传本地电脑中的文件，可选择多个文件同时上传</b> </div>'
                    +'<div style="width:119px;height:30px;overflow:hidden;" id="cke_upload_file_input">'
                    +'<iframe width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0" 0″="" border="0″ marginwidth=" src="/app/cms/upload.form.php?type=ckeditor_upload&water=1" style=""></iframe>'
                    +'</div>'
                    +'<div id="file_json_imgs" style="line-height:200%;color:red;"></div><input type="hidden" id="file_json">'
                    +'<div style="margin-top:10px;"><b>方式2： 复制网络上可访问的文件地址</b> </div>'
                    +'<div>文件地址：<input type="text" class="cke_dialog_ui_input_text" id="file_value" style="width:400px;height:20px;line-height:20px;border:1px solid #888;margin:12px 10px 0 0;"></div>'
                    +'<div>显示文字：<input type="text" class="cke_dialog_ui_input_text" id="file_text" style="width:400px;height:20px;line-height:20px;border:1px solid #888;margin:12px 10px 0 0;"></div>'
                }]  
            }],  
            onShow: function() {  
                $('#file_value').val('');
                $('#file_text').val('');
                $('#file_json').val('');
                $('#file_json_imgs').html('');
            }, 
            onOk: function() { 
                var html='';
                var json_all={};
                //上传文件数组
                var file_json=$('#file_json').val();
                if(file_json!=''){
                    json_all= $.evalJSON(file_json);
                }
                //网络文件
                var file_value=$('#file_value').val();
                var file_text=$('#file_text').val();
                if(file_value!='') {
                    var net_json = {"url": file_value, "title": file_text};
                    json_all['netfile']=net_json;
                }

                for(var m in json_all){
                    var file_value=json_all[m].url;
                    var file_text=json_all[m].title;
                    var file_ext=(/[.]/.exec(file_value)) ? /[^.]+$/.exec(file_value.toLowerCase()) : '';

                    if(file_ext=='png'||file_ext=='jpg'||file_ext=='jpeg'||file_ext=='gif'||file_ext=='bmp'||file_ext=='ico'){
                        html+='<p style="text-align:center;"><a href="'+file_value+'" target="_blank" title="'+file_text+'"><img src="'+file_value+'" alt="'+file_text+'"></a>';
                        if(file_text!='') html+='<br />'+file_text;
                        html+='</p><p></p>';
                    }else if(file_ext=='swf'||file_ext=='flv'){
                        html+='<p align="center"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="'+
                        'http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="400" height="300" id="flashvars" align="center">'+
                        '<param name="allowscriptAccess" value="sameDomain" />'+
                        '<param name="movie" value="'+file_value+'" />'+
                        '<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />'+
                        '<embed quality="high" bgcolor="#ffffff" width="400" src="'+file_value+'" height="300" allowScriptAccess="never" allowNetworking="internal" autostart="0" name="flashvars" align="center" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'+
                        '</object>';
                        if(file_text!='') html+='<br />'+file_text;
                        html+='</p><p></p>';
                    }else{
                        html+='<a href="'+file_value+'" target="_blank">'+file_text+'</a><br />';
                        if(file_text=='') html='<a href="'+file_value+'" target="_blank" title="点击下载文件">'+file_value+'</a><br />';
                    }
                }
                if(html!='') a.insertHtml(html);

            }  
        }  
    })  
})();  
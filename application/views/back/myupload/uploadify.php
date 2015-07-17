<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="<?php echo(CSSHOST);?>/style/libs/jquery-1.7.1.min.js"></script>
<script src="<?php echo CSSHOST;?>/style/libs/uploadify/jquery.uploadify.js?ver=<?php echo rand(100000,999999);?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo CSSHOST;?>/style/libs/uploadify/uploadify.css">
<script type="text/javascript">
jQuery.extend({
   evalJSON: function(strJson) {
     return eval("(" + strJson + ")");
   },
   toJSON: function(object) {
     var type = typeof object;
     if ('object' == type) {
       if (Array == object.constructor) type = 'array';
       else if (RegExp == object.constructor) type = 'regexp';
       else type = 'object';
     }
     switch (type) {
     case 'undefined':
     case 'unknown':
       return;
       break;
     case 'function':
     case 'boolean':
     case 'regexp':
       return object.toString();
       break;
     case 'number':
       return isFinite(object) ? object.toString() : 'null';
       break;
     case 'string':
       return '"' + object.replace(/(\\|\")/g, "\\$1").replace(/\n|\r|\t/g, function() {
         var a = arguments[0];
         return (a == '\n') ? '\\n': (a == '\r') ? '\\r': (a == '\t') ? '\\t': ""
       }) + '"';
       break;
     case 'object':
       if (object === null) return 'null';
       var results = [];
       for (var property in object) {
         var value = jQuery.toJSON(object[property]);
         if (value !== undefined) results.push(jQuery.toJSON(property) + ':' + value);
       }
       return '{' + results.join(',') + '}';
       break;
     case 'array':
       var results = [];
       for (var i = 0; i < object.length; i++) {
         var value = jQuery.toJSON(object[i]);
         if (value !== undefined) results.push(value);
       }
       return '[' + results.join(',') + ']';
       break;
     }
   }
});
</script>
</head>
<body>
<input id="file_upload" name="file_upload" type="file" multiple="true">
<script type="text/javascript">
                            
$(function() {
    $('#file_upload').uploadify({
        'formData': {
            '<?php echo session_name();?>' : '<?php echo session_id();?>',
            'timestamp':'<?php echo $timestamp;?>',
            'token':'<?php echo $token;?>',
            <?php if(!empty($vid)){?>,'vid':'<?php echo($id);?>'<?php }?>
        },
        //'buttonImage':'<?php echo CSSHOST;?>/style/sty_default/images/upload_btn3.png',
        'width':119,'height':30,
        'buttonClass':'btn_class',
        'swf':'<?php echo CSSHOST;?>/style/libs/uploadify/uploadify.swf',
        'uploader':'/back/upload/doIfy',
        'buttonText':'上传文件',
        'fileSizeLimit':'<?php echo $limitSize;?>',
        <?php if($type=='single_upload'){?>'queueSizeLimit':1,<?php }?>
        'progressData':'speed',
        'fileTypeExts':'*.*',
        'removeCompleted':true,
        //上传到服务器，服务器返回相应信息到data里
        'onUploadSuccess':function(file, data, response){
            try{
                
                <?php if($type=='single_upload'){?>
                    var json=$.evalJSON(data);
                    if(json.code==1) {
                        top.C.alert.alert({content:json.msg});
                        return false;
                    }
                    top.$("#"+json.vid).val(json.url);
                    top.$("#thumb_"+json.vid).attr('src',json.url);
                    <?php
                        if(!empty($callfun)) {
                            echo 'top.'.$callfun.'(data);';
                        }
                    ?>
                    return true;
                <?php }?>

                <?php if($type=='ckeditor_upload'){?>
                    var json=$.evalJSON(data);
                    if(json.code==1) {
                        top.C.alert.alert({content:json.msg});
                        return false;
                    }

                    var json_all={};
                    if(top.$('#file_json').val()!='') {
                        json_all= $.evalJSON(top.$('#file_json').val());
                    }

                    json_all[json.md5]=json;
                    var total=0;for(var f in json_all){total++;}

                    top.$('#file_json').val($.toJSON(json_all));
                    top.$('#file_json_imgs').html('已经上传了'+total+'个文件');
                    return true;
                <?php }?>

            }catch(e){top.alert(data);alert(e);return false;}
        }
    });
});
</script>
</body>
</html>
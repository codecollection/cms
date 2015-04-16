/**
 * 模型js
 */
$(function(){
    
});

var urls = {"save":"/back/model/save","del":"/back/model/del"};

//
//function save_model() {
//    save_data(urls.save);
//    var postdata = C.form.get_form('#form_add');
//    $.post("/back/model/save",postdata,function(data){
//        try {
//            var json = $.evalJSON(data);
//            if(json.status == 0){
//                window.location.reload();
//            }else{
//                C.alert.alert({content:json.msg});
//            }
//        }catch(e){C.alert.alert({content:e.message+data});}
//    });
//}
//
//function del(){
//    del_data(urls.del);
//}
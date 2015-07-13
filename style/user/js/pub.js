$(function(){
    
    
});

function save(){
    var postdata = C.form.get_form('#form_add');
    
    $.post("/user/pub/save",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.status == 0){
                show_close(json.msg);
            }else{
                C.alert.alert({content:json.msg});
            }
            
            
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

function save_data(){
    var postdata = C.form.get_form('#form_add');
    
    $.post("/user/pub/doArticle",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.status == 0){
                show_close(json.msg);
            }else{
                C.alert.alert({content:json.msg});
            }
            
            
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
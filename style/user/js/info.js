$(function(){
    
    
});

function save(){
    var postdata = C.form.get_form('#info_form');
    
    $.post("/user/info/save",postdata,function(data){
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


$(document).ready(function(){ 
     $("#content_comment").keydown(function(){
        
         Comment.limitChar("#content_comment", "#comLimit", 200);
     });
     
});

var Comment = {
    /**
     * 评论
     * @returns {undefined}
     */
    doComment:function(){
        
        var params = C.form.get_form("#comment_form");
        $.post("/user/action/doComment",params,function(data){
            try {

                var json = $.evalJSON(data);

                if(json.status == 0) {
                    self.addCommentHtml(json.data);
                }else{
                   
                }
            }catch(e){C.alert.alert({'content':e.message+data});}
        });
    },
    /**
     * 评论字数限制
     * @param {type} text
     * @param {type} count
     * @param {type} max
     * @returns {Boolean}
     */
    limitChar: function (text, count, max) {
        var text = $(text),
           count = $(count),
            sub = 0;
        //text.bind('focus keyup keydown', function (e) {
            
            len = text.val().length;
            sub = max - len;
            if (len > max) {
                text.val(text.val().substring(0, max));
                return false;
            }
           
            count.html(sub);
        //});
    },
    /**
     * 把评论添加到html中
     * @param {type} comment
     * @returns {undefined}
     */
    addCommentHtml:function(comment){
    
        var html = "<div class=\"com-list\">";
        html += "<div class=\"com-item\" commentid=\"4452310\" resuser=\"137339713\">";
        html += "<span class=\"com-user-ava\"><img src=\"http://tools.service.d.cn/userhead/get?mid=137339713&amp;size=middle\"></span>";
        html += "<div class=\"com-main\"><p class=\"com-user\"><i></i>";
        html += "<span class=\"com-user-name\">一个大反派</span>";
        html += "<span class=\"com-ip\">四川省成都市</span>发表于<span class=\"com-time\">2015-07-16 16:17:08</span></p>";
        html += "<div class=\"com-part\">我觉得玩法还不错的一款小游戏。游戏是关卡形式的，每一关我们游戏的玩法也还比较不错，推荐一下！</div>";
        html += "<div class=\"feed-back clearfix\"><p class=\"com-from\">该评论来自：当乐网</p>";
        html += "<a class=\"reply feed-btn\" onclick=\"ComFn.setParentID(4452310, this, '137339713')\" href=\"javascript:;\"> 回复</a>";
        html += "<span class=\"com-spe\">|</span><a class=\"com-support feed-btn\" commentid=\"4452310\" href=\"javascript:;\" onclick=\"COMMENT.addTop(4452310, this)\"><span class=\"up\">顶</span>";
        html += "<span class=\"counter\">(<span>16</span>)</span><span class=\"add-one\">+1</span>";
        html += "</a></div></div></div></div>";
       
    },
}
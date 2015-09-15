<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>编辑用户组 
    </span>
</div>
<p class="line-t-20"></p>
<div id="form_add">

    <input type="hidden" value="<?php echo $info["openid"];?>" name="id" id="openid">
    <table class="table_lists editbox">
        <thead>
            <tr><td colspan="2">基本信息</td></tr>
        </thead>
        <tbody>
            <tr>
                <td width="150" class="fr">昵称：</td>
                <td><?php echo $info["nickname"];?></td>
            </tr>
             <tr>
                <td width="150" class="fr">头像：</td>
                <td><img src="<?php echo $info["headimgurl"];?>" style="width:100px;height:100px;"/></td>
            </tr>
            <tr>
                <td class="fr">性别 ：</td>
                <td><?php echo $info["sex"];?></td>
            </tr>
            <tr>
                <td class="fr">省  份：</td>
                <td><?php echo $info["province"];?> </td>
            </tr>
            <tr>
                <td class="fr">城  市：</td>
                <td><?php echo $info["city"];?></td>
            </tr>
            <tr>
                <td class="fr">国  家：</td>
                <td><?php echo $info["country"];?></td>
            </tr>
            <tr>
                <td class="fr">所属组Id：</td>
                <td>
                    <?php echo $info["groupid"];?>   
                </td>
            </tr>
            <tr>
                <td class="fr">签名：</td>
                <td><?php echo $info["remark"];?></td>
            </tr>
        </tbody></table>
</div>
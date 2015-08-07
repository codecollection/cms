<div id="form_add">

    <input type="hidden" id="cms_public_id" name="id" value="<?php echo $data["cms_public_id"];?>" />
    <input type="hidden" id="modelId" name="modelId" value="3" />
    <input type="hidden" id="last_cate_id" name="data[last_cate_id]" value="1" />
    <table class="table_lists editbox">

        <tr>
            <td class="fr"><span class="fred">* </span>名称：</td>
            <td><input id="num" name="data[num]" type="text" class="comm_ipt" value="<?php echo $data["num"];?>"> 你的公众账号名称</td>
        </tr>
        
        <tr>
            <td class="fr"><span class="fred">* </span>LOGO图标：</td>
            <td><input id="logo" type="hidden" name="data[logo]" class="comm_ipt" value="<?php echo $data["logo"]?>"> 公众账号LOGO图标主要用户展示
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=logo" scrolling="no" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>
                <div class="slt_small" style="right:228px;">
                    <img id="thumb_logo" src="<?php echo !empty($data["logo"]) ? $data["logo"] : '/style/back/image/upload-pic.png';?>" />                    
                </div></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>二维码图标：</td>
            <td><input id="code_image" type="hidden" name="data[code_image]" class="comm_ipt" value="<?php echo $data["code_image"]?>"> 二维码图标主要用于扫一扫关注
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=code_image" scrolling="no" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>
                <div class="slt_small" style="right:228px;">
                    <img id="thumb_code_image" src="<?php echo !empty($data["code_image"]) ? $data["code_image"] : '/style/back/image/upload-pic.png';?>" />                    
                </div></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>微信号：</td>
            <td><input id="weixin" name="data[weixin]" type="text" class="comm_ipt" value="<?php echo $data["weixin"];?>"> 你的公众账号名称</td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>类型：</td>
            <td>
                <select class="comm_ipt" name="data[type]">
                    <?php foreach($thisc->type as $k => $v){?>
                    <option value="<?php echo $k;?>" <?php echo $k == $data["type"] ? "selected='selected'" : "";?>><?php echo $v;?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>简介：</td>
            <td>
                <textarea id="desc" type="text" name="data[desc]"><?php echo $data["desc"]; ?></textarea> 简单的介绍下公众号吧
            </td>
        </tr>

        <tr>
            <td class="fr" style="vertical-align:top;"><span class="fred">* </span>标签：</td>
            <td><input id="tag" type="text" class="comm_ipt" value="<?php echo $data["tag"] ?>" name="data[tag]" placeholder="摄影,数码"> 公众号的标签，比如：摄影，美食等。多个用（,）分隔
            </td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>行业类别：</td>
            <td><input id="cate" name="data[cate]" type="text" class="comm_ipt" value="<?php echo $data["cate"] ?>" placeholder="互联网"> 比如：教育，体育，互联网之类的</td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>商家：</td>
            <td><input id="owner" name="data[owner]" type="text" class="comm_ipt" value="<?php echo $data["owner"] ?>"> 你的品牌名称</td>
        </tr>
         <tr>
            <td class="fr"><span class="fred"> </span>地址：</td>
            <td><textarea id="public_add" name="data[public_add]"><?php echo $data["public_add"];?></textarea></td>
        </tr>
        <tr>
            <td class="fr">语言：</td>
            <td><input id="language" name="data[language]" type="text" class="comm_ipt" value="<?php echo $data["language"] ?>" placeholder="汉语"> 语言，直接是写语种，比如汉语，英语等</td>
        </tr>
        <tr>
            <td width="150" class="fr">&nbsp;</td>
            <td>
                <span></span> <a href="javascript:save();" class="btn3" style="color:#FFFFFF">确定</a>
            </td>
        </tr>
    </table>
</div>

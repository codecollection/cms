<div id="webconfig_form">
	<table class="table_lists editbox">
        <thead>
            <tr><td colspan="2">基本设置</td></tr>
        </thead>
        <tbody>
			<tr>
                <td width="150" class="fr">网站名称：</td>
                <td>
                    <input type="text" id="site_name" class="comm_ipt" value="掌易科技">
                </td>
            </tr>

            <tr>
                <td width="150" class="fr">网站域名：</td>
                <td>
                    <input type="text" id="domain_site" class="comm_ipt" value="http://crane"> 如果安装在子目录请把子目录包含在域名路径中
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">ICP备案号：</td>
                <td>
                    <input type="text" id="icp" class="comm_ipt" value=""> 如：赣ICP备2088321-1
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">分享代码：</td>
                <td>
                    <textarea style="height:55px;width:760px;" id="code_share"></textarea>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">统计代码：</td>
                <td>
                    <textarea style="height:55px;width:760px;" id="code_count">&lt;script type="text/javascript"&gt;var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253530733'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D1253530733' type='text/javascript'%3E%3C/script%3E"));&lt;/script&gt;</textarea>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">后台自定义分页：</td>
                <td>
                    <div style="width:120px" onclick="select_single(event,this,callback);return false;" class="sel_box">    <a id="txt_box" class="txt_box" href="javascript:void(0);">        <div id="sel_inp" class="sel_inp">开启</div>        <input type="hidden" class="sel_subject_val" value="1" id="pagesize_auto" name="pagesize_auto">    </a>    <div style="display:none;" id="sel_list" class="sel_list">        <a class="" value="0" href="javascript:void(0);">关闭</a>        <a class="current" value="1" href="javascript:void(0);">开启</a>    </div></div>                </td>
            </tr>

            <tr>
                <td width="150" class="fr">文档添加默认状态：</td>
                <td>
                    <div style="width:120px" onclick="select_single(event,this,callback);return false;" class="sel_box">    <a id="txt_box" class="txt_box" href="javascript:void(0);">        <div id="sel_inp" class="sel_inp">已通过</div>        <input type="hidden" class="sel_subject_val" value="0" id="info_status" name="info_status">    </a>    <div style="display:none;" id="sel_list" class="sel_list">        <a class="" value="-1" href="javascript:void(0);">草稿</a>        <a class="current" value="0" href="javascript:void(0);">已通过</a>        <a class="" value="1" href="javascript:void(0);">已删除</a>        <a class="" value="2" href="javascript:void(0);">审核中</a>        <a class="" value="3" href="javascript:void(0);">未通过</a>    </div></div>                </td>
            </tr>
            <tr>
                <td width="150" class="fr">后台分类展开全部：</td>
                <td>
                    <div style="width:120px" onclick="select_single(event,this,callback);return false;" class="sel_box">    <a id="txt_box" class="txt_box" href="javascript:void(0);">        <div id="sel_inp" class="sel_inp">开启</div>        <input type="hidden" class="sel_subject_val" value="1" id="tree_cate_expand_all" name="tree_cate_expand_all">    </a>    <div style="display:none;" id="sel_list" class="sel_list">        <a class="" value="0" href="javascript:void(0);">关闭</a>        <a class="current" value="1" href="javascript:void(0);">开启</a>    </div></div>                </td>
            </tr>
            <tr>
                <td width="150" class="fr">URL伪静态：</td>
                <td>
                    <div style="width:120px" onclick="select_single(event,this,callback);return false;" class="sel_box">    <a id="txt_box" class="txt_box" href="javascript:void(0);">        <div id="sel_inp" class="sel_inp">关闭</div>        <input type="hidden" class="sel_subject_val" value="0" id="rewrite" name="rewrite">    </a>    <div style="display:none;" id="sel_list" class="sel_list">        <a class="current" value="0" href="javascript:void(0);">关闭</a>        <a class="" value="1" href="javascript:void(0);">开启</a>    </div></div>                </td>
            </tr>
            <tr>
                <td width="150" class="fr">URL伪静态字母别名：</td>
                <td>
                    <div style="width:120px" onclick="select_single(event,this,callback);return false;" class="sel_box">    <a id="txt_box" class="txt_box" href="javascript:void(0);">        <div id="sel_inp" class="sel_inp">关闭</div>        <input type="hidden" class="sel_subject_val" value="0" id="rewrite_cate_alias" name="rewrite_cate_alias">    </a>    <div style="display:none;" id="sel_list" class="sel_list">        <a class="current" value="0" href="javascript:void(0);">关闭</a>        <a class="" value="1" href="javascript:void(0);">开启</a>    </div></div>                </td>
            </tr>
            <tr>
                <td width="150" class="fr">默认后台分页大小：</td>
                <td>
                    <input type="text" id="pagesize_admin" class="comm_ipt" value="20">
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">默认前台分页大小：</td>
                <td>
                    <input type="text" id="pagesize" class="comm_ipt" value="5">
                </td>
            </tr>

		</tbody>
        <thead>
            <tr><td colspan="2">图片设置</td></tr>
        </thead>
        <tbody>
            <tr>
                <td style="vertical-align:top;" class="fr"><p class="line-t-6"></p>网站LOGO：</td>
                <td>
                    <input type="text" style="width:300px;" class="comm_ipt l" value="/static/logo/logo_site.png" id="logo_site">
                    <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                        <iframe width="100%" height="100%" frameborder="no" marginwidth="0" border="0" marginheight="0" allowtransparency="yes" scrolling="no" src="/app/cms/upload.form.php?type=single_upload&amp;id=logo_site&amp;dir=logo"></iframe>
                    </div>

                </td>
            </tr>
            <tr>
                <td style="vertical-align:top;" class="fr"><p class="line-t-6"></p>网站ICO：</td>
                <td>
                    <input type="text" style="width:300px;" class="comm_ipt l" value="/static/logo/logo_ico.ico" id="logo_ico">
                    <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                        <iframe width="100%" height="100%" frameborder="no" marginwidth="0" border="0" marginheight="0" allowtransparency="yes" scrolling="no" src="/app/cms/upload.form.php?type=single_upload&amp;id=logo_ico&amp;dir=logo"></iframe>
                    </div>

                </td>
            </tr>

            <tr>
                <td style="vertical-align:top;" class="fr"><p class="line-t-6"></p>后台登录图：</td>
                <td>
                    <input type="text" style="width:300px;" class="comm_ipt l" value="/static/logo/logo_admin_login.png" id="logo_admin_login">
                    <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                        <iframe width="100%" height="100%" frameborder="no" marginwidth="0" border="0" marginheight="0" allowtransparency="yes" scrolling="no" src="/app/cms/upload.form.php?type=single_upload&amp;id=logo_admin_login&amp;dir=logo"></iframe>
                    </div>

                </td>
            </tr>
            <tr>
                <td style="vertical-align:top;" class="fr"><p class="line-t-6"></p>后台顶部LOGO：</td>
                <td>
                    <input type="text" style="width:300px;" class="comm_ipt l" value="/static/logo/logo_admin_top.png" id="logo_admin_top">
                    <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                        <iframe width="100%" height="100%" frameborder="no" marginwidth="0" border="0" marginheight="0" allowtransparency="yes" scrolling="no" src="/app/cms/upload.form.php?type=single_upload&amp;id=logo_admin_top&amp;dir=logo"></iframe>
                    </div>

                </td>
            </tr>

            <tr>
                <td style="vertical-align:top;" class="fr"><p class="line-t-6"></p>默认缩略图：</td>
                <td>
                    <input type="text" style="width:300px;" class="comm_ipt l" value="/static/logo/logo_thumb.png" id="logo_thumb">
                    <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                        <iframe width="100%" height="100%" frameborder="no" marginwidth="0" border="0" marginheight="0" allowtransparency="yes" scrolling="no" src="/app/cms/upload.form.php?type=single_upload&amp;id=logo_thumb&amp;dir=logo"></iframe>
                    </div>

                </td>
            </tr>
        </tbody>
        <thead>
            <tr><td colspan="2">公司信息</td></tr>
        </thead>
        <tbody>
            <tr>
                <td width="150" class="fr">公司名称：</td>
                <td>
                    <input type="text" style="width:400px;" id="company_name" class="comm_ipt" value="南昌掌易业泰科技有限公司"> 如：南昌掌易业泰科技有限公司
                </td>
            </tr>
			<tr>
                <td width="150" class="fr">联系电话：</td>
                <td>
                    <input type="text" style="width:400px;" id="company_phone" class="comm_ipt" value="0791-88152603"> 如：0791-88152603 13811258868，可填写多个
                </td>
            </tr>
			<tr>
                <td width="150" class="fr">详细地址：</td>
                <td>
                    <input type="text" style="width:400px;" id="company_address" class="comm_ipt" value="江西省南昌市青山湖区火炬大街988号"> <a href="javascript:void(0);" onclick="show_map_baidu(this);" id="but_map_company">点击地图获取</a>&nbsp;如：江西省南昌市高新区火炬大街918号-812/816<input type="hidden" id="latitude" value="115.982038">
			<input type="hidden" id="longitude" value="28.698465">
                </td>
            </tr>
			
        </tbody>
        <thead>
            <tr><td colspan="2">商城设置</td></tr>
        </thead>
        <tbody>
            <tr>
                <td width="150" class="fr">在线订购：</td>
                <td>
                    <div style="width:120px" onclick="select_single(event,this,callback);return false;" class="sel_box">    <a id="txt_box" class="txt_box" href="javascript:void(0);">        <div id="sel_inp" class="sel_inp">开启</div>        <input type="hidden" class="sel_subject_val" value="1" id="online_buy" name="online_buy">    </a>    <div style="display:none;" id="sel_list" class="sel_list">        <a class="" value="0" href="javascript:void(0);">关闭</a>        <a class="current" value="1" href="javascript:void(0);">开启</a>    </div></div>                </td>
            </tr>
            <tr>
                <td width="150" class="fr">非会员下单：</td>
                <td>
                    <div style="width:120px" onclick="select_single(event,this,callback);return false;" class="sel_box">    <a id="txt_box" class="txt_box" href="javascript:void(0);">        <div id="sel_inp" class="sel_inp">开启</div>        <input type="hidden" class="sel_subject_val" value="1" id="member_order" name="member_order">    </a>    <div style="display:none;" id="sel_list" class="sel_list">        <a class="" value="0" href="javascript:void(0);">关闭</a>        <a class="current" value="1" href="javascript:void(0);">开启</a>    </div></div>                </td>
            </tr>
        </tbody>
        <thead>
            <tr><td colspan="2">SEO设置</td></tr>
        </thead>
        <tbody>
            <tr>
                <td width="150" class="fr">首页SEO标题：</td>
                <td>
                    <input type="text" style="width:765px;" id="seo_title" class="comm_ipt" value="MCMS手机建站之星-南昌免费建站,企业建站,自助建站,手机建站,免费建站系统-南昌掌易业泰科技有限公司（掌易科技）">
                </td>
            </tr>
			<tr>
                <td width="150" class="fr">首页关键词：</td>
                <td>
                    <input type="text" style="width:765px;" id="seo_keywords" class="comm_ipt" value="MCMS,免费建站,企业建站,自助建站,手机建站,建站程序,免费建站系统">
                </td>
            </tr>
			<tr>
                <td width="150" class="fr">首页描述：</td>
                <td>
					<textarea style="height:55px;width:760px;" id="seo_description">掌易科技是一家专业WEB建站服务公司，提供手机建站移动互联网建站解决方案，并且拥有定制大型门户和其他行业WEB解决方案的能力</textarea>
                </td>
            </tr>
        </tbody>

        <thead>
            <tr><td colspan="2">二维码生成</td></tr>
        </thead>
        <tbody>
            <tr>
                <td width="150" class="fr">二维码文本：</td>
                <td>
                    <textarea style="height:55px;width:760px;" id="qrcode_txt">http://www.mcms.cc/</textarea>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">二维码大小：</td>
                <td>
                    <input type="text" style="width:100px;" id="qrcode_size" class="comm_ipt" value="5"> 默认大小为 25 像素宽，此处填写的数字X25为实际大小，如125的宽度此处填写 5
                </td>
            </tr>


        </tbody>

        <thead>
            <tr><td colspan="2">QQ客服设置</td></tr>
        </thead>
        <tbody>
                        <tr>
                <td width="150" class="fr">分组名称 1：</td>
                <td>
                    <input type="text" style="width:100px;" id="qqgroup_0" class="comm_ipt" value="售前咨询">
                    号码：
                                        <input type="text" style="width:100px;" id="qqlist_0_0" class="comm_ipt" value="48254462">
                                        <input type="text" style="width:100px;" id="qqlist_0_1" class="comm_ipt" value="1133299">
                                        <input type="text" style="width:100px;" id="qqlist_0_2" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_0_3" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_0_4" class="comm_ipt" value="">
                                    </td>
            </tr>
                        <tr>
                <td width="150" class="fr">分组名称 2：</td>
                <td>
                    <input type="text" style="width:100px;" id="qqgroup_1" class="comm_ipt" value="技术支持">
                    号码：
                                        <input type="text" style="width:100px;" id="qqlist_1_0" class="comm_ipt" value="1005025290">
                                        <input type="text" style="width:100px;" id="qqlist_1_1" class="comm_ipt" value="582873225">
                                        <input type="text" style="width:100px;" id="qqlist_1_2" class="comm_ipt" value="627266138">
                                        <input type="text" style="width:100px;" id="qqlist_1_3" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_1_4" class="comm_ipt" value="">
                                    </td>
            </tr>
                        <tr>
                <td width="150" class="fr">分组名称 3：</td>
                <td>
                    <input type="text" style="width:100px;" id="qqgroup_2" class="comm_ipt" value="">
                    号码：
                                        <input type="text" style="width:100px;" id="qqlist_2_0" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_2_1" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_2_2" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_2_3" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_2_4" class="comm_ipt" value="">
                                    </td>
            </tr>
                        <tr>
                <td width="150" class="fr">分组名称 4：</td>
                <td>
                    <input type="text" style="width:100px;" id="qqgroup_3" class="comm_ipt" value="">
                    号码：
                                        <input type="text" style="width:100px;" id="qqlist_3_0" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_3_1" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_3_2" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_3_3" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_3_4" class="comm_ipt" value="">
                                    </td>
            </tr>
                        <tr>
                <td width="150" class="fr">分组名称 5：</td>
                <td>
                    <input type="text" style="width:100px;" id="qqgroup_4" class="comm_ipt" value="">
                    号码：
                                        <input type="text" style="width:100px;" id="qqlist_4_0" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_4_1" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_4_2" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_4_3" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_4_4" class="comm_ipt" value="">
                                    </td>
            </tr>
                        <tr>
                <td width="150" class="fr">分组名称 6：</td>
                <td>
                    <input type="text" style="width:100px;" id="qqgroup_5" class="comm_ipt" value="">
                    号码：
                                        <input type="text" style="width:100px;" id="qqlist_5_0" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_5_1" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_5_2" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_5_3" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_5_4" class="comm_ipt" value="">
                                    </td>
            </tr>
                        <tr>
                <td width="150" class="fr">分组名称 7：</td>
                <td>
                    <input type="text" style="width:100px;" id="qqgroup_6" class="comm_ipt" value="">
                    号码：
                                        <input type="text" style="width:100px;" id="qqlist_6_0" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_6_1" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_6_2" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_6_3" class="comm_ipt" value="">
                                        <input type="text" style="width:100px;" id="qqlist_6_4" class="comm_ipt" value="">
                                    </td>
            </tr>
                    </tbody>

	</table>
	</div>
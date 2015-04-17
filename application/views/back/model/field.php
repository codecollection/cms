<div class="box4">

    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>字段ID</td>
                <td>字段文字</td>
                <td>字段名称(sql)</td>
                <td>字段类型(sql)</td>
                <td>表单类型</td>
                <td>默认值</td>
                <td>表单备注</td>
                <td>标签</td>
                <td>是否系统</td>
                <td width="80">操作</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['field_id'];?></td>
                <td><?php echo $v['title'];?></td>
                <td><?php echo $v['field'];?></td>
                <td><?php echo $v['field_type'];?></td>
                <td><?php echo $v['form_type'];?></td>
                <td><?php echo $v['form_value'];?></td>
                <td><?php echo $v['field_remark'];?></td>
                <td><?php echo $v['field_tag'];?></td>
                <td><?php echo $v['is_system'];?></td>
                <td>
                    <a href="javascript:void(0);" onclick="model_field(<?php echo $v['field_id'];?>);" class="btn">删除</a>
                </td>
            </tr>
            <?php }?>
            
        
        </tbody>

    </table>

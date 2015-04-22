/*
 * MCMS Copyright (c) 2012-2013 ZhangYiYeTai Inc.
 * 
 *  http://www.mcms.cc
 * 
 * The program developed by loyjers core architecture, individual all rights reserved, 
 * if you have any questions please contact loyjers@126.com
 */

var V= {
    "params":{
        /*"verify_uname":"用户名长度6-20个字符，以字母a-z（不区分大小写）开头，且只能由字母、数字0-9和下划线组成",*/
		"verify_uname":"用户名长度6-20个字符",
        "verify_upass":"密码长度为6-20个字符",
        "verify_email":"建议使用QQ、新浪、网易或搜狐邮箱"
    },
    /*
     * o，表单对象this，type 填写前提示=0，填写后提示=1，txt 提示文字
     */
    "form_tips":function(o,txt,type){
        if(!arguments[2]) type=0;
        if(txt=='') type=0;
        var form_tips_span='form_tips';//自动生成提示层类名
        var a=$(o).parent().find('.'+form_tips_span);
        if(a.length==0){
            $(o).after('<span class="'+form_tips_span+'">'+txt+'</span>');
            a=$(o).parent().find('.'+form_tips_span);
        }else{
            a.html(txt).css({'color':'red'});
        }
        a.css({'display':'inline-block','font-size':'12px','height':'32px','line-height':'30px','padding-right':'10px','border-right':'1px solid #ddd','text-indent':'30px','margin':'0 10px','background':'url(/static/sty_2dianshop/images/tips.png) 0 -176px no-repeat'});
        if(type==0){
            a.css({'color':'green'});
            if(txt=='') a.css({'background':'url(/static/sty_2dianshop/images/tips.png) 10px -263px no-repeat','border':'0px'}).html('&nbsp;');
        }else{
            a.css({'color':'red','background':'url(/static/sty_2dianshop/images/tips.png) 10px -298px no-repeat','border':'0px'});
        }
    },
    // 判断长度
    "verify_length":function(str,min,max){
        if(!arguments[1]) min=0;
        if(!arguments[2]) max=100;
        if(str.length<min) return "长度不能少于 "+min+" 个字符("+str.length+")";
        if(str.length>max) return "长度不能多于 "+max+" 个字符("+str.length+")";
        return '';
    },
    
    // 判断用户名
    "verify_uname":function(str) {
        str=str.toLocaleLowerCase();
        var no_prefix=['temp_','zazyz_','sqzyz_','admin'];
        for(var i=0;i<no_prefix.length;i++){
            if(str.substr(0,no_prefix[i].length)==no_prefix[i]) return '用户名不能以敏感字符 '+no_prefix.join(',')+' 开头';
        }
        var re=/^[a-z][a-z_0-9]{5,19}$/i;
        if(!re.test(str)) return V.params.verify_uname;
        return '';
    },
    
    // 判断密码
    "verify_upass":function(str) {
        if (str.length >= 6 && str.length <= 20) {
            return '';
        } else {
            return V.params.verify_upass;
        } 
    },
    
    // 判断电子邮箱
    "verify_email":function(str) {
        var re=/^[\w\-\.]+@[\w\-]+(\.\w+)+$/;
        if(!re.test(str)) return '电子邮箱格式不正确';
        return '';
    },
    
    // 判断URL
    "verify_url":function(str) {
        var re=/^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_\~`@[\]\':+!]*([^<>\"])*$/i;
        if(re.test(str)){
            return '';
        }else{
            return '网址格式不正确，必须以 http:// 开头';
        }
    }, 
    // 判断手机号码
    "verify_mobile":function(str) {
        var re=/^((\(\d{3}\))|(\d{3}\-))?(13\d{9}|14\d{9}|15\d{9}|17\d{9}|18\d{9})$/i;
        if(re.test(str)){
            return '';
        }else{
            return '手机号码格式不正确';
        }
    }, 
    // 判断固定电话号码
    "verify_phone":function(str) {
        var re=/^(0\d{2,3}\-\d{7,8})|(\+\d{2,3}\-0\d{2,3}\-\d{7,8})$/i;
        if(re.test(str)){
            return '';
        }else{
            return '固定电话号码格式不正确';
        }
    },
    
    // 判断性别和身份证号码是否相符，1=男，0=女
    "verify_idcard_gender":function(idcard,gender){
        if (idcard.substr(16,1) % 2 == gender){
            return '';
        }else{
            return '填写的性别和身份证号码上不符';
        }
    },
    
    // 判断生日和身份证号码是否相符，生日格式：XXXX-XX-XX
    "verify_idcard_birthday":function(idcard, birtyday) {
        var sBirthday = idcard.sbustr(6,4) + '-' + idcard.sbustr(10,2) + '-' . idcard.sbustr(12,2);
        if (sBirthday == birtyday) {
            return '';
        }else{
            return '出生日期和身份证号码上不符';
        }
    },
    
    // 判断身份证号码，正确则返回18位后的身份证号码（兼容15位）
    "verify_idcard":function(idno,sex,bir) {
        if(!arguments[1]) sex='';
        if(!arguments[2]) bir='';
            var area = {
                11 : "北京",
                12 : "天津",
                13 : "河北",
                14 : "山西",
                15 : "内蒙古",
                21 : "辽宁",
                22 : "吉林",
                23 : "黑龙江",
                31 : "上海",
                32 : "江苏",
                33 : "浙江",
                34 : "安徽",
                35 : "福建",
                36 : "江西",
                37 : "山东",
                41 : "河南",
                42 : "湖北",
                43 : "湖南",
                44 : "广东",
                45 : "广西",
                46 : "海南",
                50 : "重庆",
                51 : "四川",
                52 : "贵州",
                53 : "云南",
                54 : "西藏",
                61 : "陕西",
                62 : "甘肃",
                63 : "青海",
                64 : "宁夏",
                65 : "新疆",
                71 : "台湾",
                81 : "香港",
                82 : "澳门",
                91 : "国外"
        }
        var idno, Y, JYM, S, M, idno_array;
        idno_array = idno.split("");
        if (idno.length != 15 && idno.length != 18) {
                return '身份证号的长度不正确';
        }
        if (area[parseInt(idno.substr(0, 2))] == null) {
                return '身份证地区非法!';//
        }
        var idno_sex = (idno.length == 15) ? idno_array[14] : idno_array[16];
        idno_sex %= 2;

        
        if (sex!='' && idno_sex != sex) {
            return '和您选中的性别不相符';
        }
        
        switch (idno.length) {
        case 15:
                return '请输入18位的身份证号，格式化后的身份证号码：'+V.idto18(idno);
                
                var dateStr = "19" + idno.substr(6, 2) + "-"
                                + idno.substr(8, 2) + "-" + idno.substr(10, 2);
                if (bir!='' && dateStr != bir) {// 判断是否和输入的生日是否一致
                        return '身份证号的生日和您输入的生日不相符';
                }
                
                if ((parseInt(idno.substr(6, 2)) + 1900) % 4 == 0
                                || ((parseInt(idno.substr(6, 2)) + 1900) % 100 == 0 && (parseInt(idno
                                                .substr(6, 2)) + 1900) % 4 == 0)) {
                        ereg = /^[1-9][0-9]{5}[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}$/;// 测试出生日期的合法性
                } else {
                        ereg = /^[1-9][0-9]{5}[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}$/;// 测试出生日期的合法性
                }
                if (ereg.test(idno)) {
                        return '';// 正确
                } else {
                        return '出生日期超出范围或含有非法字符';
                }
                break;
        case 18:
                
                var dateStr = idno.substr(6, 4) + "-" + idno.substr(10, 2)
                                + "-" + idno.substr(12, 2);
                if (bir!='' && dateStr != bir) {// 判断是否和输入的生日是否一致
                        return '身份证号的生日和您输入的生日不相符';
                }
                
                if (parseInt(idno.substr(6, 4)) % 4 == 0
                                || (parseInt(idno.substr(6, 4)) % 100 == 0 && parseInt(idno
                                                .substr(6, 4)) % 4 == 0)) {
                        ereg = /^[1-9][0-9]{5}(19|20)[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}[0-9Xx]$/;// 闰年出生日期的合法性正则表达式
                } else {
                        ereg = /^[1-9][0-9]{5}(19|20)[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}[0-9Xx]$/;// 平年出生日期的合法性正则表达式
                }
                if (ereg.test(idno)) {
                        S = (parseInt(idno_array[0]) + parseInt(idno_array[10])) * 7
                                        + (parseInt(idno_array[1]) + parseInt(idno_array[11]))
                                        * 9
                                        + (parseInt(idno_array[2]) + parseInt(idno_array[12]))
                                        * 10
                                        + (parseInt(idno_array[3]) + parseInt(idno_array[13]))
                                        * 5
                                        + (parseInt(idno_array[4]) + parseInt(idno_array[14]))
                                        * 8
                                        + (parseInt(idno_array[5]) + parseInt(idno_array[15]))
                                        * 4
                                        + (parseInt(idno_array[6]) + parseInt(idno_array[16]))
                                        * 2 + parseInt(idno_array[7]) * 1
                                        + parseInt(idno_array[8]) * 6 + parseInt(idno_array[9])
                                        * 3;
                        Y = S % 11;
                        JYM = "10X98765432";
                        M = JYM.substr(Y, 1);
                        if (M == idno_array[17].toUpperCase()) {
                                return '';// 正确
                        } else {
                                return '不是正确的身份证号码';
                        }
                } else {
                        return '出生日期超出范围或含有非法字符';
                }
                break;
        default:
                return '身份证号码错误，请确认';
                break;
        }
    },
    
    idto18:function(id){
        if(id.length==18) return id;
        var lastNumber;
        //取得前面17位号码
        var zone=id.substring(0,6);
        var year="19" + id.substring(6,8);
        var mdo=id.substring(8,15);
        id = zone + year + mdo;

        //取得最后的检验码
        var getNum=eval(id.charAt(0)*7+id.charAt(1)*9+id.charAt(2)*10+id.charAt(3)*5+id.charAt(4)*8+id.charAt(5)*4+id.charAt(6)*2+id.charAt(7)*1+id.charAt(8)*6+id.charAt(9)*3+id.charAt(10)*7+id.charAt(11)*9+id.charAt(12)*10+id.charAt(13)*5+id.charAt(14)*8+id.charAt(15)*4+id.charAt(16)*2);
        getNum=getNum%11;
        switch (getNum) {
        case 0 :
          lastNumber="1";
          break;
        case 1 :
          lastNumber="0";
          break;
        case 2 :
          lastNumber="X";
          break;
        case 3 :
          lastNumber="9";
          break;
        case 4 :
          lastNumber="8";
          break;
        case 5 :
          lastNumber="7";
          break;
        case 6 :
          lastNumber="6";
          break;
        case 7 :
          lastNumber="5";
          break;
        case 8 :
          lastNumber="4";
          break;
        case 9 :
          lastNumber="3";
          break;
        case 10 :
          lastNumber="2";
          break;
        }

        //document.write(lastNumber);
        all = id + lastNumber;
        return all;
}
    
    
} 
(function() {  
    CKEDITOR.plugins.add("upfile", {  
        requires: ["dialog"],  
        init: function(a) {  
            a.addCommand("upfile", new CKEDITOR.dialogCommand("upfile"));  
            a.ui.addButton("upfile", {  
                label: "上传图片/动画/和其他允许的文件",//调用dialog时显示的名称  
                command: "upfile",  
                icon: this.path + "upfile.png"//在toolbar中的图标  
  
            });  
            CKEDITOR.dialog.add("upfile", this.path + "dialogs/upfile.js")  
  
        }  
  
    })  
  
})();  
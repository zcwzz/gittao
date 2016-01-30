<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <script type="text/javascript" src="lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="css/H-ui.admin.css" rel="stylesheet" type="text/css" />
    <link href="lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <link href="lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <link href="/editor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/editor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/editor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/editor/umeditor.min.js"></script>
    <script type="text/javascript" src="/editor/lang/zh-cn/zh-cn.js"></script>
    <title>添加用户</title>
    <style>
        section {
            width: 800px;
            height:400px;
            margin: auto;
            text-align: left;
        }

        h1{
            font-family: "微软雅黑";
            font-weight: normal;
        }
        .btn {
            display: inline-block;
            *display: inline;
            padding: 4px 12px;
            margin-bottom: 0;
            *margin-left: .3em;
            font-size: 14px;
            line-height: 20px;
            color: #333333;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;
            cursor: pointer;
            background-color: #f5f5f5;
            *background-color: #e6e6e6;
            background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
            background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
            background-repeat: repeat-x;
            border: 1px solid #cccccc;
            *border: 0;
            border-color: #e6e6e6 #e6e6e6 #bfbfbf;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            border-bottom-color: #b3b3b3;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            *zoom: 1;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .btn:hover,
        .btn:focus,
        .btn:active,
        .btn.active,
        .btn.disabled,
        .btn[disabled] {
            color: #333333;
            background-color: #e6e6e6;
            *background-color: #d9d9d9;
        }

        .btn:active,
        .btn.active {
            background-color: #cccccc \9;
        }

        .btn:first-child {
            *margin-left: 0;
        }

        .btn:hover,
        .btn:focus {
            color: #333333;
            text-decoration: none;
            background-position: 0 -15px;
            -webkit-transition: background-position 0.1s linear;
            -moz-transition: background-position 0.1s linear;
            -o-transition: background-position 0.1s linear;
            transition: background-position 0.1s linear;
        }

        .btn:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        .btn.active,
        .btn:active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .btn.disabled,
        .btn[disabled] {
            cursor: default;
            background-image: none;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
    </style>
</head>
<body>
<div class="pd-20">
    <h2>添加帮助</h2>
    <form action="<?php echo \Yii::$app->urlManager->createUrl('system/addcontent')?>" method="post" class="form form-horizontal" >
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>标题：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" id="help_title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3">选择分类：</label>
            <div class="formControls col-5">
                <span style="width: 153px;" class="select-box">
                <select style="width: 143px;" class="select" size="1" id="help_title_id" >
                    <option selected>请选择分类</option>
                    <?php foreach ($helplist as $val){?>
                        <option class="sel" value="<?php echo $val['helptitle_id']?>"><?php echo $val['helptitle_name']?></option>
                    <?php }?>
                </select>
                </span>
                <span id="sss" style="display: none;">
                    <input type="text" style="width: 123px;" class="input-text" id="title">
                    <input class="btn btn-primary radius" type="button" id="addtitle" value="&nbsp;&nbsp;添加&nbsp;&nbsp;">
                    <input class="btn btn-primary radius" type="button" id="shou" value="&nbsp;&nbsp;<<&nbsp;&nbsp;">
                </span>
                <input class="btn btn-primary radius" type="button" id="chu" value="&nbsp;&nbsp;>>&nbsp;&nbsp;">
            </div>
            <div class="col-4"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3">内容：</label>
            <div class="formControls col-5">
                <script type="text/plain" id="myEditor" style="width:800px;height:240px;">
                    <p>这里我可以写一些输入提示</p>
                </script>
            </div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-3">
                <input class="btn btn-primary radius" type="button" id="add_content" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</div>
</div>

<script type="text/javascript">
    //实例化编辑器
    var um = UM.getEditor('myEditor');
    um.addListener('blur',function(){
        $('#focush2').html('编辑器失去焦点了')
    });
    um.addListener('focus',function(){
        $('#focush2').html('')
    });

    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UM.getEditor('myEditor').getContent());
        alert(arr.join("\n"));
    }

</script>
</body>
</html>
<script>
    $(function(){
        $('#chu').click(function (){
            $(this).hide();
            $('#sss').show();
        })
        $('#shou').click(function (){
            $('#chu').show();
            $('#sss').hide();
        })
    });
    $(function (){
        $("#addtitle").click(function (){
            var title = $("#title").val();
            if(title == ''){
                alert("请输入分类名称");
                return false;
            }else{
                $.ajax({
                    type: "POST",
                    url: "<?php echo \Yii::$app->urlManager->createUrl('system/addtitle')?>",
                    data: "title="+title,
                    success: function(msg){
                        if(msg == 1){
                            window.location.reload();
                            $('#chu').show();
                            $('#sss').hide();
                        }
                    }
                });
                return true;
            }
        })
        //添加内容help_content
        $("#add_content").click(function (){
            var arr = [];
            arr.push(UM.getEditor('myEditor').getContent());
            var content = arr.join("\n");
            var help_title_id = $('#help_title_id').val();
            var help_title = $('#help_title').val();
            $.ajax({
                type: "POST",
                url: "<?php echo \Yii::$app->urlManager->createUrl('system/addcontent')?>",
                data: "help_title_id="+help_title_id+"&help_title="+help_title+"&content="+content,
                success: function(msg){
                    if(msg == 1){
                        alert("添加成功");
                    }else{
                        alert("添加失败");
                    }
                }
            });
        })
    })
</script>



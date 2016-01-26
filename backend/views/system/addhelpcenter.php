<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
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
    <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>基本设置</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 基本设置 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
    <form action="" method="post" class="form form-horizontal" id="form-article-add">
        <div id="tab-system" class="HuiTab">
            <div class="tabCon">
                <div class="row cl">
                    <label class="form-label col-2"><span class="c-red">*</span>网站名称：</label>
                    <div class="formControls col-10">
                        <input style="width: 40%" type="text" id="website-title" placeholder="控制在25个字、50个字节以内" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-2"><span class="c-red">*</span>关键词：</label>
                    <div class="formControls col-10">
                        <select class="input-text" ><option>asdasd</option></select>

                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-2"><span class="c-red">*</span>描述：</label>
                    <div class="formControls col-10">
                        <input type="text" id="website-description" placeholder="空制在80个汉字，160个字符以内" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-2"><span class="c-red">*</span>css、js、images路径配置：</label>
                    <div class="formControls col-10">
                        <input type="text" id="website-static" placeholder="默认为空，为相对路径" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-2"><span class="c-red">*</span>上传目录配置：</label>
                    <div class="formControls col-10">
                        <input type="text" id="website-uploadfile" placeholder="默认为uploadfile" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-2"><span class="c-red">*</span>底部版权信息：</label>
                    <div class="formControls col-10">
                        <input type="text" id="website-copyright" placeholder="&copy; 2014 H-ui.net" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-2">备案号：</label>
                    <div class="formControls col-10">
                        <input type="text" id="website-icp" placeholder="京ICP备00000000号" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-2">统计代码：</label>
                    <div class="formControls col-10">
                        <textarea class="textarea"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cl">
            <div class="col-10 col-offset-2">
                <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存 </button>
                <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="js/H-ui.js"></script>
<script type="text/javascript" src="js/H-ui.admin.js"></script>
<script type="text/javascript">
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        $.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
    });
</script>
</body>
</html>
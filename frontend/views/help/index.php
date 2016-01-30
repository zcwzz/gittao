<?php

/* 
	关于我们
 */

$this->title = '关于我们';
?>
<style>
    .help_left{
        width: 200px;
        height: 500px;
        background-color: #ffffff;
        margin-top: 20px;
        padding: 10px;
        float: left;
    }
    .help_left h1{
        font-size: 150%;
    }
    .help_right{
        width: 850px;
        height: 530px;
        background-color: #ffffff;
        margin-top: 30px;
        padding: 10px;
        margin-left: 250px;
    }
    .content{
        width: 850px;
        background-color: #ffffff;
        margin-top: 30px;
        padding: 10px;
    }

</style>

<div class="t_min">
    <!--关于我们-->
    <div class="help_left">
      <!--  <a href="#" class="bg" id="aboutus">关于我们</a>
        <a href="#" id="linkus">联系我们</a>-->
        <?php foreach ($helplist as $val){?>
            <?php if($val['helptitle_pid'] == 0){echo "<h1>".$val['helptitle_name']."</h1>";}?>
                <?php foreach ($helplist as $v){?>
              <?php if($val['helptitle_id'] == $v['helptitle_pid']){echo "&nbsp&nbsp&nbsp&nbsp&nbsp<a href='javascript:void(0)' class='name' idd='".$v['helptitle_id']."'>".$v['helptitle_name']."</a><br>";}?>
                    <?php }?>
        <?php  }?>
    </div>
    <div class="help_right" style="padding-top; padding-bottom">
      <!--  <div class="content">
            <h1>网站介绍</h1>
        </div>-->
        
    </div>
</div>
<script>
    $(function (){
        $(".name").on('click',function (){
            var id = $(this).attr('idd');
            $.ajax({
                type: "POST",
                url: "<?php echo \Yii::$app->urlManager->createUrl('help/content')?>",
                data: "id="+id,
                success: function(msg){
                    $(".help_right").html(msg);
                }
            });
        })
    })
</script>

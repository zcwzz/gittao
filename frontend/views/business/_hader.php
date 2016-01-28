     <?php
		Yii::$app->session->open();
			$user_id=Yii::$app->session->get('user_id');
		$dsn="mysql:host=127.0.0.1;dbname=final";

	$pdo=new PDO($dsn,'root','');
	$pdo->exec("set names utf8");
	$sql="select * from fin_user inner join fin_merchant_base on user_id=mer_id where user_id=$user_id";
	$arr=$pdo->query($sql);
	$all_arr=$arr->fetchAll(PDO::FETCH_ASSOC);

	 ?>
	 <div class="mt_rt" id="topmenus">
	 <ul>
	 <li class="img"> <img src="/<?php echo $all_arr[0]['mer_logo'] ?>" height="100" width="100"></li>
	 <li class="wi1">   <h1><?php echo $all_arr[0]['mer_name'] ?></h1>   <p>手机号：<?php echo $all_arr[0]['mer_phone'] ?></p></li>
	 <li class="wi2">账户余额：<?php echo $all_arr[0]['mer_money'] ?></li>
	 <li class="wi3"> 
	 <a href="http://www.qutaoxue.net/merchant/merchantQuota">	 <span class="bg1">额度申请</span></a>
	 <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg2">兼职结算</span></a>
	 <a href="http://www.qutaoxue.net/merchant/merchantParttimeList"><span class="bg3">兼职审核</span></a>
	 </li>
	 </ul> 
	 <div class="clear"></div>
	 </div>
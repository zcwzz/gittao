$(function (){
		$('#agreement').click(function(){
		
		//反选$("input[name='chk_list']").attr("checked",$(this).attr("checked"));
		var isckeck = $(this).is(':checked');
		if(isckeck){
			$("#studentRegBtn").removeAttr('disabled');
		}
		else
		{
			$("#studentRegBtn").attr('disabled',"true");
		}	
	})
		$('#finuser-user_phone').blur(function (){	
			var phone=$(this).val();
			//var num=$(this).val();
			if(/^1[3|4|5|8]\d{9}$/.test(phone))
			{
			
				$.ajax({
				   type: "GET",
				   url: "index.php?r=user/only",
				   data: "phone="+phone,
				   success: function(msg){
					 if(msg==1)
					  {
						$('#phone').html('电话号码重复')
						//$("#studentRegBtn").attr('disabled',"true");
					  }else
					  {
						  $('#phone').html('')
						 // $("#studentRegBtn").removeAttr('disabled');
					  }
				   }
				});
			}
			})
		/*$('#phone').blur(function (){	
			var num=$(this).val();
			if(/^1[3|4|5|8]\d{9}$/.test(num))
			{
				alert('ok');
			}else
			{
				alert('no');
			}
			
	})*/
})


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
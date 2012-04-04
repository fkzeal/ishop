$(function()
{
	$(".item-qty").click(function() {		
		var item_name=$(this).attr("id");
		item_name=item_name.substr(0,5);
		var item_total_price=$("#"+item_name+"-price").text()*$("#"+item_name+"-qty").val();		
		$("#"+item_name+"-total-price").text(item_total_price.toFixed(2));
		var total_price=getTotalPrice();
		//total_price=total_price.toFixed(2);
		$("#total-price").text(total_price.toFixed(2));
		var total_credits=getTotalCredits(item_name);
		//total_credits=parseFloat(total_credits);
		$("#total-credits").text(total_credits);
	});
		
	function getTotalPrice()
	{
		var total_items=$("#total-item-qty").val();
		var i;
		var total_price=0;
		var item_total_price=0;
		for(i=1;i<=total_items;i++)
		{		
			item_total_price=$("#item"+i+"-total-price").text();
			if(item_total_price==undefined)
			{
				continue;
			}
			total_price+=(item_total_price*1.0);
		}
		return total_price;	
	}
	function getTotalCredits(item_name)
	{
		var total_items=$("#total-item-qty").val();		
		var i;
		var total_credits=0;
		var item_total_credit=0;
		var item_credit=0;
		for(i=1;i<=total_items;i++)
		{		
			item_credit=$("#"+item_name+"-credit").text()*1.0;
			// alert(item_credit);
			item_total_credit=item_credit*$("#"+item_name+"-qty").val();
			// alert(item_total_credit);
			if(item_total_credit==undefined)
			{
				continue;
			}
			total_credits=(item_total_credit*1.0)+total_credits;
		}
		return total_credits;	
	}
	
});


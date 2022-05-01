var finded = [];

$(document).ready(function(){
	
	$('#titleFish').change(function(){
		
		var word = $(this).val();
		
		finded.push('\''+word+'\'');
		
		$('#titleFish').val('');
		
	});
	
	$('#findButton').click(find);
	$('#clearButton').click(clear);
	
	$('#help').click(function(){
		
		$('#infoBox').fadeIn(700);
		
	});
	
	$('#closeBtn').click(function(){
		
		$('#infoBox').fadeOut(700);
		
	});
	
});

function clear()
{
	$('#listFish').html('');
	finded = [];
}

function find()
{
	$.ajax('find.php', {
		
		type: 'POST',
		data: { finded: JSON.stringify(finded) },
		success: function(response){
			
			console.log(JSON.parse(response));
			
			var data = JSON.parse(response);
			
			var listEl = $('#listFish');
			
			for(var i = 0; i < data.length; i++)
			{
				listEl.append("<div class='fishEl'>"+data[i].title+" - "+data[i].price+"</div>");
				console.log(data[i]);
			}
			
		}
		
	});
}
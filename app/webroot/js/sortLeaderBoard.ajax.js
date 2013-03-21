$(document).ready(function(){


	$('.rank_xp_sort').click(function(){
		var sort = $('#valSortRankXp').attr('order');
		$.ajax({
		    type: "post",
		    url: "sortleaderboard",
		    data: {t: 'xp_rank', s: sort},
		    success: function(res) {
		        $('#leaderboard').html(res);
		       	if(sort == 'DESC'){
		       		$('#valSortRankXp').attr('order','ASC');
				}
		       	else{
		       		$('#valSortRankXp').attr('order','DESC');
		    	}
		    }
		});
	});

	$('#username_sort').click(function(){
		var sort = $('#valSortUserName').attr('order');
		$.ajax({
		    type: "post",
		    url: "sortleaderboard",
		    data: {t: 'username_sort', s: sort},
		    success: function(res) {
		        $('#leaderboard').html(res);
		       	if(sort == 'DESC'){
		       		$('#valSortUserName').attr('order','ASC');
				}
		       	else{
		       		$('#valSortUserName').attr('order','DESC');
		    	}
		    }
		});
	});

});
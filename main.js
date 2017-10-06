$(document).ready(function() {
	$('button').mousedown(function() {
		var direction = $(this).text();
		$.ajax ({
			url: 'controller.php',
			type: 'post',
			dataType: "text",
			data: { move : direction},
			success: function(data) {
				if (data) {
					console.log('move ' + direction);
				} else {
					return "the deo nao";
				}
			},
			error: function(error) {
		       alert ("Error: " + error.statusText);
		    }
		});
	});
	$('button').mouseup(function () {
		var direction = $(this).text();
		$.ajax ({
			url: 'reset.php',
			type: 'post',
			dataType: "text",
			data: { reset : direction},
			success: function(nice) {
				if (nice) {
					console.log('reset ' + direction);
				} else {
					return "the deo nao";
				}
			},
			error: function(error) {
		       alert ("Error: " + error.statusText);
		    }
		});	
	});
});

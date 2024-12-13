$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/balls/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			window.location.href = "/balls/thenks2.html"		
		});
		return false;
	});

});

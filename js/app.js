$(document).ready(function () {
		$("#ajax-contact").submit(function () {
				$("#submitBtn").attr("disabled", true);
				return true;
		});
});

$(function() {

	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert alert-danger');
			$(formMessages).addClass('alert alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#phone').val('');
			$('#message').val('');
			$("#submitBtn").attr("disabled", false);
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');
			$("#submitBtn").attr("disabled", false);

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('發生錯誤，您的訊息無法傳送，請使用其他聯繫方式！');
			}
		});

	});

});

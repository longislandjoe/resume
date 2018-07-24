$(function() {

	// Get the form.
	var form = $('#contactform');

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
			$("#emailsubmit").removeClass("bg-danger");
		  $("#emailsubmit").addClass("bg-success");
		  $("#emailsubmit").val("Submitted!  Thank you.");
			$("#emailsubmit").attr("disabled", true);
			$("#formMessages").removeClass("text-danger");
			$("#formMessages").addClass("text-success");

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#company').val('');
			$('#comment').val('');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$("#emailsubmit").removeClass("btn-danger");
		  $("#emailsubmit").addClass("btn-warning");
		  $("#emailsubmit").val("Submitted!  Thank you.");
			$("#emailsubmit").attr("disabled", false);
			$("#formMessages").removeClass("text-success");
			$("#formMessages").addClass("text-danger");

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});

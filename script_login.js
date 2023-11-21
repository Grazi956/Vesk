$(function() {
	$(document).on("submit", "#login_form", function(event) {
	  event.preventDefault();
  
	  $.ajax({
		type: "POST",
		url: "validation.php",
		data: $(this).serialize(),
		dataType: "json",
		success: function(response) {
		  if (response.redirect) {
			window.location.href = response.redirect;
		  } else if (response.message) {
			console.log(response.message); // Exibe a mensagem de erro no console
			$(".form-message").html(response.message);
		  }
		},
		error: function(xhr, status, error) {
		  console.log(xhr.responseText); // Exibe o erro no console
		}
	  });
	});
  });
  
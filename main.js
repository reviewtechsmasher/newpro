// preloader

		$(document).ready(function () {
			//Preloader
			preloaderFadeOutTime = 500;
			function hidePreloader() {
				var preloader = $('#loading');
				preloader.fadeOut(preloaderFadeOutTime);
			}
			hidePreloader();
		});
	

  let preloader = select('#loading');
  if (preloader) {
    window.addEventListener('load', () => {
      loading.remove()
    });
  }



// contact js

$(document).ready(function() {
  $('#contact-form').submit(function(e) {
      e.preventDefault();
      
      var name = $('#name').val();
      var email = $('#email').val();
      var message = $('#message').val();
      
      $.ajax({
          type: 'POST',
          url: 'process_form.php',
          data: { name: name, email: email, message: message },
          success: function(response) {
              $('#response').html(response);
              $('#contact-form')[0].reset();
          },
          error: function() {
              $('#response').html('Sorry, there was an error sending your message.');
          }
      });
  });
});


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



  // --------swiperjs----------
  // var swiper = new Swiper(".mySwiper", {
  //   slidesPerView: 4,
  //   spaceBetween: 20,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //     type: "fraction",
  //   },
  // });

  

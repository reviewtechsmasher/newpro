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


  // /**
  //  * Mobile nav toggle
  //  */
  //  on('click', '.mobile-nav-toggle', function(e) {
  //   select('#navbar').classList.toggle('navbar-mobile')
  //   this.classList.toggle('bi-list')
  //   this.classList.toggle('bi-x')
  // })

  // /**
  //  * Mobile nav dropdowns activate
  //  */
  // on('click', '.navbar .dropdown > a', function(e) {
  //   if (select('#navbar').classList.contains('navbar-mobile')) {
  //     e.preventDefault()
  //     this.nextElementSibling.classList.toggle('dropdown-active')
  //   }
  // }, true)

  //   /**
  //  * Scrool with ofset on links with a class name .scrollto
  //  */
  //    on('click', '.scrollto', function(e) {
  //     if (select(this.hash)) {
  //       e.preventDefault()
  
  //       let navbar = select('#navbar')
  //       if (navbar.classList.contains('navbar-mobile')) {
  //         navbar.classList.remove('navbar-mobile')
  //         let navbarToggle = select('.mobile-nav-toggle')
  //         navbarToggle.classList.toggle('bi-list')
  //         navbarToggle.classList.toggle('bi-x')
  //       }
  //       scrollto(this.hash)
  //     }
  //   }, true)

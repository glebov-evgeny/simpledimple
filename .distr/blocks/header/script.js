$(function () {
	initMenu();
	initScroll();
	initHeaderScroll();
	initActiveLink();
  
	function initHeaderScroll(){
	  let header = document.querySelector('.header');
		function headerTint(){
			if(window.scrollY > 1 ){
			  header.classList.add('header__scrolled');
			}else{
			  header.classList.remove('header__scrolled');
			}
		}
		window.addEventListener('scroll', () => {
			headerTint();
		});
		headerTint();
	}
  
	function initMenu() {
	  $('.header__menu').on('click', function () {
			$('.header__nav').toggleClass('active')
				$(this).toggleClass('active');
			}
		);
	  $('.header__nav-link, .header__nav-link-btn, .header__nav-close').on('click', function () {
			$('.ham, .header__nav, .header__menu').removeClass('active');
	  });
	}

	function initActiveLink(){
		const linksContainer = document.querySelector('.header__nav');
		linksContainer.onclick=function(e){
			for(let i = 0;i<linksContainer.children.length;i++){
				linksContainer.children[i].classList.remove('is-active');
			}
			e.target.classList.add('is-active');
		}
	}

	function initScroll() {
	  if (!$('.scroll').length) return;
  
	  $(document).on('click scroll.init', '.scroll', function (event) {
		event.preventDefault();
		$.fancybox.close();
  
		var
		  hrefId = $(this).attr('href') || $(this).data('href'),
		  posTop = $(hrefId).offset().top;
		$('html, body').animate({ scrollTop: posTop - 95 }, 1500);
	  });
	}
  
});
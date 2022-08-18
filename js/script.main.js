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

	function initScroll() {
		if (!$('.scroll').length) return;

		$(document).on('click scroll.init', '.scroll', function (event) {
			event.preventDefault();

			let
				hrefId = $(this).attr('href') || $(this).data('href'),
				posTop = $(hrefId).offset().top,
				header = document.querySelector('.header'),
			headerHeight = header.clientHeight;

			$('html, body').animate({ scrollTop: posTop - headerHeight }, 1500);
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
  
});
$(function () {
	initSelect();
  	initRange();
	initFile();

	function initSelect(){
	 	let select = document.querySelector('.f_01'),
			options = document.querySelector('.about__form-input-select-options'),
			currentOption = document.querySelector('.about__form-input-select-text'),
			currentInput = document.querySelector('#aboutSelect');
		select.addEventListener('click', function(event){
			event.preventDefault();
			console.log('rkbr')
			this.classList.toggle('active');
		})
		options.addEventListener('click', function(event){
			for(let i = 0;i<options.children.length;i++){
				options.children[i].classList.remove('active');
			}
			let currentText = event.target.textContent
			event.target.classList.add('active');
			currentOption.textContent = currentText;
			currentInput.value = currentText;
		})
	}

	function initRange(){
		let inputRange = document.querySelector('.about__form-input-range'),
			inputRangeText = document.querySelector('.about__form-input-range-number');

		inputRange.oninput = function() {
			inputRangeText.textContent = this.value;
		}
	}

	function initFile() {
		let fileInput  = document.querySelector( ".about__form-input-file" ),
			button     = document.querySelector( ".about__form-input-file-button" ),
			buttontxt     = document.querySelector( ".about__form-input-file-text" );

		button.addEventListener( "keydown", function( event ) {
			if ( event.keyCode === 13 || event.keyCode === 32 ) {
				fileInput.focus();
			}
		});
		button.addEventListener( "click", function( event ) {
			fileInput.focus();
			return false;
		});
		fileInput.addEventListener( "change", function( event ) {
			buttontxt.innerHTML = this.value;
		});
	}
});

$(function () {
 
  initLazy();

  function initLazy() {

    let
      lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
      active = false,
      threshold = 200
      ;

    const lazyLoad = function (e) {
      if (active === false) {
        active = true;

        setTimeout(function () {
          lazyArr.forEach(function (lazyObj) {
            if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

              if (lazyObj.dataset.src) {
                let
                  img = new Image(),
                  src = lazyObj.dataset.src
                  ;
                img.src = src;
                img.onload = function () {
                  if (!!lazyObj.parent) {
                    lazyObj.parent.replaceChild(img, lazyObj);
                  } else {
                    lazyObj.src = src;
                  }
                }
                lazyObj.removeAttribute('data-src');
              }

              if (lazyObj.dataset.srcset) {
                lazyObj.srcset = lazyObj.dataset.srcset;
                lazyObj.removeAttribute('data-srcset');
              }

              lazyObj.classList.remove('lazy');
              lazyObj.classList.add('lazy-loaded');

              lazyArr = lazyArr.filter(function (obj) {
                return obj !== lazyObj;
              });

              if (lazyArr.length === 0) {
                document.removeEventListener('scroll', lazyLoad);
                window.removeEventListener('resize', lazyLoad);
                window.removeEventListener('orientationchange', lazyLoad);
              }
            }
          });

          active = false;
        }, 200);
      }
    };

    lazyLoad();

    document.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
    window.addEventListener('orientationchange', lazyLoad);

  }

});
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
document.addEventListener('DOMContentLoaded', function() {

	MicroModal.init({
		openTrigger: 'data-custom-open',
		closeTrigger: 'data-custom-close',
		disableScroll: true,
		disableFocus: true,
		awaitOpenAnimation: true,
		awaitCloseAnimation: true
	})
	$('[data-custom-open]').click(function() {
		$('.modal [name=form]').val($(this).data('form'))
	})
	$('[data-custom-close]').click(function() {
		$('.modal [name=form]').val('')
	})

	$('.home-slider__heading').each(function() {
		let text  = $(this).text().split(' '),
				first = text.shift()
		$(this).html(`${first} <br><span>${text.join(' ')}</span>`)
	})

	
	// Swiper Sliders

	const homeSlider = new Swiper('.home-slider', {
		speed: 800,
		effect: 'fade',
		centeredSlides: true,
		pagination: {
			el: '.home-slider__pagination',
			type: 'custom',
			renderCustom: function(swiper, current, total) {
				let indT = total >= 10 ? total : `0${total}`
				let indC = current >= 10 ? current : `0${current}`
				return `<b>${indC}</b><span></span> ${indT}`
			}
		},
		scrollbar: {
			el: '.home-siler__scrollbar',
			draggable: true
		},
		navigation: {
			prevEl: '.home-slider__prev',
			nextEl: '.home-slider__next'
		},
		keyboard: {
			enabled: true,
			onlyInViewport: false
		},
		runCallbacksOnInit: true
	})

	const advSlider = new Swiper('.advantages-slider', {
		effect: 'fade',
		speed: 1400,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false
		}
	})

	// Callback List Numbers

	$('.home-callback__list li').each(function() {
		$(this).html($(this).text().replace(/([0-9.]+)/g, '<span>$1</span>'))
	})

})




























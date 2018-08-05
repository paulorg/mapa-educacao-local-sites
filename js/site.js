(function ($) {

	mapControl();
	smoothScroll();

	function smoothScroll(){
		$('a[href^="#"]').on('click', function(event) {
			var target = $(this.getAttribute('href'));
			if( target.length ) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top
				}, 1000);
			}
		});
	}

	function mapControl() {
		function moveUpestado(thisObject) {
			thisObject.appendTo(thisObject.parents('svg>g'));
		}

		$('.mapa-svg-estados').click(function () {
			$(this).siblings().removeClass('mapa-svg-estados-active');
			$(this).addClass('mapa-svg-estados-active');
			$('.class-select').val($(this).attr('id')).trigger('change');
			moveUpestado($(this));
			var selectedState = $(this).attr('id');
			$('.states-lists > div').addClass('hidden');
			$('.states-lists .'+selectedState ).removeClass('hidden');
			$('html, body').stop().animate({ scrollTop: $('.unities').offset().top }, 1000);
		});

		$('.class-select > option').each(function () {
			$(this).addClass($(this).attr('value'));
		});

		$('.class-select').change(function () {
			var selectedState = $(this).val();
			$('#' + selectedState).siblings().removeClass('mapa-svg-estados-active');
			$('#' + selectedState).addClass('mapa-svg-estados-active');
			moveUpestado($('#' + selectedState));
			$('.states-lists > div').addClass('hidden');
			$('.states-lists .'+selectedState ).removeClass('hidden');
			$('html, body').stop().animate({ scrollTop: $('.unities').offset().top }, 1000);
		});

	}
})(jQuery);

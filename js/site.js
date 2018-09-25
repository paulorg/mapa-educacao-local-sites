(function ($) {

	mapControl();
	showUnityInfo();
	smoothScroll();
	videoControl();

	function smoothScroll(){
		$('a[href^="#"]').on('click', function(e) {
			var target = $(this.getAttribute('href'));
			if( target.length ) {
				e.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top
				}, 1000);
			}
		});
	}

	function videoControl(){
		$('#video').on('shown.bs.modal', function (e) {
		  $('.embed-responsive-item').attr('src', 'https://www.youtube.com/embed/KP5KPm6Ir9o?rel=0&amp;showinfo=0&autoplay=1');
		});
		$('#video').on('hidden.bs.modal', function (e) {
		  $('.embed-responsive-item').attr('src', '');
		});
	}

	function showUnityInfo(){
		$('.unities-list a').on('click', function(e) {
			var jqThis = $(this);
			var currentUnity = jqThis.data('local');
			$('.unities').addClass('active');
			$('.modal-content > div').addClass('hidden');
			$('.modal-content .'+currentUnity).removeClass('hidden');
			$('.unity-card').modal('show');
			e.preventDefault();
		});
	}

	function mapControl() {
		function moveUpestado(thisObject) {
			thisObject.appendTo(thisObject.parents('svg>g'));
		}

		$('.mapa-svg-estados').click(function () {
			$(this).siblings().removeClass('mapa-svg-estados-active');
			$(this).addClass('mapa-svg-estados-active');
			$('.unities').addClass('active');
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
			$('.unities').addClass('active');
			moveUpestado($('#' + selectedState));
			$('.states-lists > div').addClass('hidden');
			$('.states-lists .'+selectedState ).removeClass('hidden');
			$('html, body').stop().animate({ scrollTop: $('.unities').offset().top }, 1000);
		});
	}

})(jQuery);

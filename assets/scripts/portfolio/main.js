jQuery(document).ready(function($) {


/*
|--------------------------------------------------------------------------
| Global myTheme Obj / Variable Declaration
|--------------------------------------------------------------------------
|
|
|
*/

	var myTheme = window.myTheme || {},
    $win = $( window );
	


/*
|--------------------------------------------------------------------------
| isotope
|--------------------------------------------------------------------------
|
|
|
*/		

	myTheme.Isotope = function () {
	
		// 4 column layout
		var isotopeContainer = $('.isotopeContainer');
		if( !isotopeContainer.length || !jQuery().isotope ) return;
		$win.load(function(){
            var filterValue = $('.isotopeFilters').find('.active').find('a').attr('data-filter');
			isotopeContainer.isotope({
				itemSelector: '.isotopeSelector',
                filter: filterValue
			});
		$('.isotopeFilters').on( 'click', 'a', function(e) {
				$('.isotopeFilters').find('.active').removeClass('active');
				$(this).parent().addClass('active');
				var filterValue = $(this).attr('data-filter');
				isotopeContainer.isotope({ filter: filterValue });
				e.preventDefault();
			});
		});

	};
	
	

/*
|--------------------------------------------------------------------------
| Fancybox
|--------------------------------------------------------------------------
|
|
|
*/		

	myTheme.Fancybox = function () {
		
		$(".fancybox-pop").fancybox({

			fitToView	: true,
			width		: '100%',
			height		: '100%',
			autoSize	: true,
			closeClick	: false,
			openEffect	: 'elastic',
			closeEffect	: 'none'
		});
	
	};
	
		
	
	
/*
|--------------------------------------------------------------------------
| Functions Initializers
|--------------------------------------------------------------------------
|
|
|
*/
	
	myTheme.Isotope();
	myTheme.Fancybox();



});




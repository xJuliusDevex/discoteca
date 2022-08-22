window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'),{
        slidesToShow:3,
        slidesToScroll:3,
        draggable:true,
        dots:'.carosel__indicadores',
        arrows:{
            prev:'.carosel__anterior',
            next:'.carosel__siguiente'
        },

        responsive: [
			{
			  // screens greater than >= 775px
			  breakpoint: 350,
			  settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			},{
			  // screens greater than >= 1024px
			  breakpoint: 800,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			  }
			}
		]
    });
});
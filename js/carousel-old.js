$(document).ready(function(){
    var imgItems = $('.carousel-body li').length; // Number of slides
	var imgPos = 1;
    $('div.slide-caption').addClass('slideLeft').css({
        righ: '50%'
    });
//    adding indicators for each slide
    for(i = 1; i <= imgItems; i++){
		$('.indicators').append('<li><span class="fa fa-circle"></span></li>');
	}

    $('.carousel-body li').hide();
    $('.carousel-body li:first').show();
    $('.indicators li:first').css({'color': '#019e67'});

    // function on slide indicators
    $('.indicators li').click(function(){
        var currentIndicator = $(this).index()+1; // selected indicator " +1 added because we are puting it in css nth-child function and css doesn't take index from 0 "
        console.log(currentIndicator);
		$('.carousel-body li').hide(); // hide all the slides
		$('.carousel-body li:nth-child('+ currentIndicator +')').fadeIn(1500); // show the selected Slide

		$('.indicators li').css({'color': '#858585'}); //reset all indicators default
		$(this).css({'color': '#019e67'});// give color to selected indicator

        imgPos = currentIndicator;
    });

    // function on right button

    function nextSlider(){
        if( imgPos >= imgItems){imgPos = 1;}
		else {imgPos++;}

		$('.indicators li').css({'color': '#858585'});
		$('.indicators li:nth-child(' + imgPos +')').css({'color': '#019e67'});

		$('.carousel-body li').hide(); // hide all the slides
		$('.carousel-body li:nth-child('+ imgPos +')').fadeIn(1500); // show the selected Slide
    }
    $('.right span').click(nextSlider);

    $('.left span').click(function(){
       if( imgPos <= 1){imgPos = imgItems;}
		else {imgPos--;}

		$('.indicators li').css({'color': '#858585'});
		$('.indicators li:nth-child(' + imgPos +')').css({'color': '#019e67'});

		$('.carousel-body li').hide(); // hide all the slides
		$('.carousel-body li:nth-child('+ imgPos +')').fadeIn(1500); // show the selected Slide
    });

    setInterval(function(){
		nextSlider();
	}, 4000);

})

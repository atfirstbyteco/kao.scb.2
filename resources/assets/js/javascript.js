$(document).ready(function() {

	var slideWrapper = $(".home-slider");
	slideWrapper.slick({
		dots: false,
		arrows: false,
		autoplay: false,
		autoplaySpeed: 4000,
		speed: 500,
		infinite: false
	});

	$('.sidebanner .btn').click(function(){
		var target = $(this).parent();
		if(target.hasClass('active-mobile')){ 
			target.removeClass('active-mobile');
		}else{ 
			target.addClass('active-mobile'); 
		}
	});
	
	
	/* Scroll to anchor on click - Start */
	// $('a.btn-nav').click(function (e) {
	//     e.preventDefault();
	//     var navId = $(this).attr('href');
	//     var idHeight = $(navId).offset();
	
	//     $('html, body').animate({
	//         scrollTop: (idHeight.top - 60)
	//     }, 1000);

	//     if($(window).width() < 768) {
	// 	    $('html, body').animate({
	// 	        scrollTop: (idHeight.top - 50)
	// 	    }, 1000);
	//     }
	// });
	/* Scroll to anchor on click - End */

	$('#sharefb').on('click',share_facebook);
	

});
function share_facebook() {
	var base_url = window.location.href; 

	window.open('http://www.facebook.com/sharer.php?u=' + base_url, '_fb','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=600');
}




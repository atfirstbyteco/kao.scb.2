$(document).ready(function() {

	// $('.home-ranking .open-list').on('click', function (e) {
	// 	$(this).parent('.home-ranking').toggleClass('active');
	// });

	// $("img").each( function( ) {
	//     var src = $(this).attr("src");
	//     if( /\.gif$/i.test(src)) {
	//         $(this).attr( "src", src.replace( /\.gif$/, ".gif?rnd=" + Math.floor(Math.random() * 100) + 1));
	//     }
	// });

	// $(window).scroll(function(){
	//     $('img[realsrc]').each(function(i){
	//       var t = $(this);
	//       if(t.position().top > ($(window).scrollTop() + $(window).height()) {
	//         t.attr('src', t.attr('realsrc')); // trigger the image load
	//         t.removeAttr('realsrc'); // so we only process this image once
	//       }
	//     });
	// });

	var slideWrapper = $(".home-slider");
	slideWrapper.slick({
		dots: false,
		arrows: false,
		autoplay: true,
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




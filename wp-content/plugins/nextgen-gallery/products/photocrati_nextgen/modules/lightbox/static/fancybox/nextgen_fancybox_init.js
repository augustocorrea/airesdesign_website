jQuery(function($) {
    $(".ngg-fancybox").fancybox({
        titlePosition: 'inside',
		// Needed for twenty eleven
		onComplete: function(){
			$('#fancybox-wrap').css('z-index', 10000);
		}
	});
});

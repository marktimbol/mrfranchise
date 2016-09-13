
$(document).ready(function() {
	let video = videojs('brand-video');

	$('#VideoModal').on('show.bs.modal', function(e) {	
		video.play();
	});

	$('#VideoModal').on('hide.bs.modal', function(e) {
		video.pause();
	});
});
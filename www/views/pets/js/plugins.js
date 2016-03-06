// Avoid `console` errors in browsers that lack a console.
(function() {
	var method;
	var noop = function () {};
	var methods = [
		'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
		'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
		'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
		'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
	];
	var length = methods.length;
	var console = (window.console = window.console || {});

	while (length--) {
		method = methods[length];

		// Only stub undefined methods.
		if (!console[method]) {
			console[method] = noop;
		}
	}
}());





$(function () {
	$("#owl-banner").owlCarousel({
		autoPlay        : 3000,
		singleItem      : true,
		lazyLoad        : true,
		slideSpeed      : 300,
		paginationSpeed : 400,
		navigation      : true,
		navigationText: ['<i class="glyphicon glyphicon-chevron-left"></i>', '<i class="glyphicon glyphicon-chevron-right"></i>']
	});
})





$(function () {
	$('form').submit( function( event ) {
		event.stopPropagation();
		event.preventDefault();

		var form = $(this);

		$('[type="submit"]', form).button('loading');

		$.post(form.prop('action'), form.serialize())
			.success( function( data ) {
				alert(data);
			})
			.complete( function() {
				$('[type="submit"]', form).button('reset');
				form.get(0).reset();
			});
	});
})


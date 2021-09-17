(function() {
  $(function() {
    $('body').chardinJs({
      'attribute': 'data-intro'
    });
	
	$('body').on('click', 'div[data-toggle="chardinjs"]', function (e) {
		e.preventDefault();
		return ($('body').data('chardinJs')).toggle();
	});
	
  });
}).call(this);
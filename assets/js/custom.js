$(function(){
	$('a.item').click(function(){
 		$('.item').removeClass('active');
 		$(this).addClass('active');
 	});

 	$('.accordion').accordion();

 	$('.add').click(function(){
 		$('.modal').modal('show');
 	});

 	$('.ui.dropdown')
  .dropdown({
    allowAdditions: true
  });



$('.ui.basic.modal')
  .modal('show')
;











});
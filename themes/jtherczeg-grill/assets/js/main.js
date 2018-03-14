$(document).ready(function() {

	

  $("div.blog-post").hover(
    function() {
        $(this).find("div.content-hide").slideToggle("fast");
    },
    function() {
        $(this).find("div.content-hide").slideToggle("fast");
    }
  );

  $('.flexslider').flexslider({
		prevText: '',
		nextText: ''
	});

  $('.testimonails-slider').flexslider({
    animation: 'slide',
    slideshowSpeed: 5000,
    prevText: '',
    nextText: '',
    controlNav: false
  });

  $(function(){

  // Instantiate MixItUp:

  $('#Container').mixItUp();

  

  $(document).ready(function() {
      $(".fancybox").fancybox();
    });

  });


});
$(function(){
    var $select = $(".counter");
    for (i=0;i<=50;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});

$('#add').click(function() {
    alert('asd');
});


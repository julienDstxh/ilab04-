  <script src="js/jquery-2.0.3.min.js"></script>
  <script src="js/idangerous.swiper-2.1.min.js"></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    paginationClickable: true,
    slidesPerView: 1,
    loop: true
  })
  </script>
  <script>
  $(window).load(function() {
		var divHeight = $('.swiper-slide-active ul').height(); 
		$('.swiper-wrapper, .swiper-slide, .swiper-container').css('height', divHeight+'px');
	});
  </script>

  <script src="js/data.js"></script>  

</body>
</html>
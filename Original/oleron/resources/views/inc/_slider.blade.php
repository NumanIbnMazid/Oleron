<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >

    {{-- ===========================================Bootstrap Slider======================================== --}}

    <div class="container-fluid">
	<div class="row">
		<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1" class=""></li>
				<li data-target="#carousel" data-slide-to="2" class=""></li>
				<li data-target="#carousel" data-slide-to="3" class=""></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner carousel-zoom">
				<div class="item active"><img class="img-responsive" src="/images/slider4.jpg" alt="olcbd.com">
				  <div class="carousel-caption animated slideInLeft" style="height:50% !important">
					<h1  data-animation="animated zoomInLeft" class="flux">Oléron Law & Co.</h1>
					<p data-animation="animated bounceInDown">We Provide the best services for you. <br></p>
					<p> <span id="services">Legal Opinion</span></p>
					<!--<a href="/contact" class="btn btn-dafault btn-details">Get Service</a>-->
				  </div>
				</div>
			   	<div class="item"><img class="img-responsive" src="/images/slider.jpg" alt="Numan Ibn Mazid">
				  <div class="carousel-caption animated slideInLeft" style="height:50% !important">
					<h1 data-animation="animated zoomInLeft" class="flux">Oléron Law & Co.</h1>
					<p data-animation="animated bounceInDown">We Provide the best services for you. <br></p>
					<p> <span id="services">Legal Documentation</span></p>
					<!--<a href="/contact" class="btn btn-dafault btn-details">Get Service</a>-->
				  </div>
				</div>
				<div class="item"><img class="img-responsive" src="/images/slider2.jpg" alt="olcbd.org">
				  <div class="carousel-caption animated slideInLeft" style="height:50% !important">
					<h1 data-animation="animated zoomInLeft" class="flux">Oléron Law & Co.</h1>
					<p data-animation="animated bounceInDown">We Provide the best services for you. <br></p>
					<p> <span id="services">Legal Research</span></p>
					<!--<a href="/contact" class="btn btn-dafault btn-details">Get Service</a>-->
				  </div>
				</div>
				<div class="item"><img class="img-responsive" src="/images/slider3.jpg" alt="Oléron Law & Co.">
				  <div class="carousel-caption animated slideInLeft" style="height:50% !important">
					<h1 data-animation="animated zoomInLeft" class="flux">Oléron Law & Co.</h1>
					<p data-animation="animated bounceInDown">We Provide the best services for you. <br></p>
					<p> <span id="services">Court Service/Advocacy</span></p>
					<!--<a href="/contact" class="btn btn-dafault btn-details">Get Service</a>-->
				  </div>
				</div>
				<div class="item"><img class="img-responsive" src="/images/slider5.jpg" alt="Numan">
				  <div class="carousel-caption animated slideInLeft" style="height:50% !important">
					<h1 data-animation="animated zoomInLeft" class="flux">Oléron Law & Co.</h1>
					<p data-animation="animated bounceInDown">We Provide the best services for you. <br></p>
					<p> <span id="services">Custom</span></p>
					<!--<a href="/contact" class="btn btn-dafault btn-details">Get Service</a>-->
				  </div>
				</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
			<a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
		</div> 
	</div>
</div>

    <script type="text/javascript">
        (function( $ ) {

    //Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#sg-carousel'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
   
	
})(jQuery);
    </script>

</section>
<!--/#main-slider-->

<?php while (have_posts()) : the_post(); ?>

	<div id="carousel" class="carousel slide" data-interval="8000">
		<!-- Carousel items -->
		<div class="carousel-inner">
			<div class="active item">
				<img src="/assets/carousel-1.jpg" class="img-rounded" alt="">
			</div>
			<div class="item">
				<img src="/assets/carousel-2.jpg" class="img-rounded" alt="">
			</div>
			<div class="item">
				<img src="/assets/carousel-3.jpg" class="img-rounded" alt="">
			</div>
			<div class="item">
				<img src="/assets/carousel-4.jpg" class="img-rounded" alt="">
			</div>
		</div> <!--/.carousel-inner -->

		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
		</ol>
	</div> <!--/#carousel -->

	<script>	
	$(document).ready(function() {
		$('.carousel').carousel({
			interval: 8000
		});
	});
	</script>

  <?php the_content(); ?>
<?php endwhile; ?>

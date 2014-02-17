<?php include('header.php') ?>


<div class="swiper-container">
	<div class="swiper-wrapper">
		<section class="swiper-slide">
			<?php include('layervault.php') ?>
		</section>
		<section class="swiper-slide">
			<script>
			dug({
			  endpoint: 'http://api.dribbble.com/shots/popular',
			  template: '<ul class="feed graphic">\
			    {{#shots}}\
			      <li>\
			        <a href="{{url}}" title="{{title}}">\
			        <img src="{{image_400_url}}" alt="Oups, something went wrong">\
			        <div class="legend">\
			        <span class="drag ss-icon">directright</span>\
			        {{title}} |\
			        <time> {{created_at|dug.ago}}</time> / Dribble\
			        </div>\
			        </a>\
			      </li>\
			    {{/shots}}\
			  </ul>'
			});
			</script>
		</section>
		<section class="swiper-slide">
			<?php include('hackernews.php') ?>
		</section>
		<section class="swiper-slide">
			<?php include('alistapart.php') ?>
		</section>
		<section class="swiper-slide">
			<?php include('siteinspire.php') ?>
		</section>
	</div>
	<div class="pagination"></div>
</div>
	
<?php include('footer.php') ?>
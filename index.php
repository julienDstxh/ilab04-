<?php include('header.php') ?>

<div class="swiper-container">
	<div class="swiper-wrapper">
	
		
		
		<section>
		
			<?php include('login/login.php') ?>
			
			
		</section>
		
	
		<section class="swiper-slide">
			<script>
			  dug({
			    endpoint: 'http://api.dribbble.com/shots/popular',
			    template: '<ul class="feed graphic">\
			          \{\{\#shots\}\}\
			            <li>\
			              <a href="\{\{url\}\}">\
			                <img src="\{\{image_url\}\}">\
			              </a>\
			              <div class="legend">\
			             	 <span class="drag ss-icon">directright</span>\
			              	<a href="\{\{url\}\}">\
				                \{\{title\}\}\
				              </a>\
			              	<br><time> {{created_at|dug.ago}}</time>\
			              </div>\
			            </li>\
			          \{\{\/shots\}\}\
			        </ul>'
			  });
			</script>
		</section>
		<section class="swiper-slide">
			<?php include('layervault.php') ?>
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
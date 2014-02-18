<?php include('header.php') ?>

<div class="swiper-container">
	<div class="swiper-wrapper">
		<section class="swiper-slide dribbble">
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
<setion class="menu">
	<header class="header">
		logoooo
	</header>
	<div class="tabs">
		<div class="ss-icon">list</div>
		<div class="ss-icon">view</div>
		<div class="ss-icon">settings</div>
	</div>
	<ul>
		<li><a href="#">Dribbble</a></li>
		<li><a href="#">API</a></li>
		<li><a href="#">show HN</a></li>
		<li><a href="#">Matt Griffin</a></li>
		<li><a href="#">Rebecka</a></li>
	</ul>
</setion>
	
<?php include('footer.php') ?>
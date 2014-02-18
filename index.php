
<?php include ('config/config.php');?>
<?php include('header.php') ?>



<div class="session_container">
	<section class="login_warp">
			<?php include('login/login.php') ?>
	</section>
	<section class="signup_warp off">
			<?php include('login/signup.php') ?>
	</section>
	<section class="errer_login_wrap">
		<span>
			<p>Your password or your mail is false</p>
			<button>Retry</button>
		</span>
	</section>
	<section class="errer_signup_wrap">
		<span>
			<p class="error err_mail_empty" style="display:none;">Your mail is empty</p>
			<p class="error err_mail_wrong" style="display:none;">Your mail is wrong</p>
			<p class="error err_mail_exist" style="display:none;">Your mail is already in use</p>
			<p class="error err_pass_empty" style="display:none;">Your password is empty</p>
			<p class="error err_pass_match" style="display:none;">Your password don't match</p>
			<p class="error err_pass_letter" style="display:none;">Your password is to short</p>

			<button>Retry</button>
		</span>
	</section>
	<section class="signup_ok">
		<span>
			<p> Your are a new exclusive member of Fillip</p>
			<button>Return to login</button>
		</span>
	</section>
</div>



<div class="save_container">

	<?php include('save/save.php') ?>

</div><!--end save container -->


<div class="swiper-container">
	<div class="swiper-wrapper">

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
		<section class="swiper-slide layervault_section">
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
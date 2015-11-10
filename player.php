<?php include 'header.html'; ?>

<div id="wrapper">
<h2>Notre philosophie</h2>

<div class="px-video-container" id="myvid">
	<div class="px-video-img-captions-container">
		<div class="px-video-captions hide"></div>
		<video width="640" height="360" poster="media/poster_PayPal_Austin2.jpg" controls>
			<!-- video files -->
			<source src="https://www.paypalobjects.com/webstatic/mktg/videos/PayPal_AustinSMB_baseline.mp4" type="video/mp4" />
			<source src="https://www.paypalobjects.com/webstatic/mktg/videos/PayPal_AustinSMB_baseline.webm" type="video/webm" />
			
			<!-- text track file -->
			<track kind="captions" label="English captions" src="media/captions_PayPal_Austin_en.vtt" srclang="en" default />
			
			<!-- fallback for browsers that don't support the video element -->
			<div>
				<a href="https://www.paypalobjects.com/webstatic/mktg/videos/PayPal_AustinSMB_baseline.mp4">
					<img src="media/poster_PayPal_Austin2.jpg" width="640" height="360" alt="download video" />
				</a>
			</div>
		</video>
	</div><!-- end container for captions and video -->
	<div class="px-video-controls"></div>
</div><!-- end video container -->

</div><!-- end page wrapper container -->

<script src="js/px-video.js"></script>

<script>

// Initialize
new InitPxVideo({
	"videoId": "myvid",
	"captionsOnDefault": true,
	"seekInterval": 20,
	"videoTitle": "PayPal Austin promo",
	"debug": true
});

</script>

<?php include 'footer.html'; ?>



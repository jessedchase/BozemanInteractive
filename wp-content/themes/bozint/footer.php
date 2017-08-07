<div class="clear"></div>
<div id="footer">
	<div id="footerinner">
		<div class="container">
			<div class="footerthird">
				<div class="padding">
					<h2>Contact Us</h2>
					<a href="/" title="Bozeman Website Design">
					<img src="https://www.bozemaninteractive.com/images/bozeman_website_design_large_logo-white.jpg" alt="Bozeman Interactive Logo" id="footerlogo"><br/>
					</a>
					P.O. Box 605<br/>
					Bozeman, Montana 59715<br/>
					
					<p>
						<strong>PHONE:</strong> 406-781-2306<br/>
						<strong>EMAIL:</strong> <a href="mailto:sales@bozemaninteractive.com" title="Email Bozeman Interactive">Email Us</a><br/>
					</p> 
				</div>
			</div>
			<div class="footerthird">
				<div class="padding">
					<h2>Bozeman Design Services</h2>
					<ul>
						<li><a href="/design_services/bozeman-website-design/" title="Bozeman Web Design">Website Design</a></li>
						<li><a href="/madison-web-design" title="Madison Web Design">Madison Web Design</a>
						<li><a href="/design_services/bozeman-brand-design/" title="Bozeman Graphic Design">Graphic Design</a></li>
						<li><a href="/design_services/bozeman-graphic-design/" title="Bozeman Brand Design">Brand Design</a></li>
						<li><a href="/design_services/bozeman-print-design/" title="Bozeman Print Design">Print Design</a></li>
						<li><a href="/design_services/bozeman-seo-services/" title="Bozeman SEO">Website SEO</a></li>
						<li><a href="/design_services/bozeman-marketing-design/" title="Bozeman Marketing Design">Marketing Design</a></li>
						<li><a href="/design_services/bozeman-website-security/" title="Bozeman Website Security">Bozeman Website Security</a></li>
					</ul>
				</div>
			</div>
			<div class="footerthird">
				<div class="padding">
					<h2>Follow Us</h2>
					<ul class="share-buttons">
					  <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.bozemaninteractive.com&t=Bozeman%20Website%20Design%20and%20Bozeman%20Graphic%20Design" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="<?php echo site_url();?>/images/flat_web_icon_set/Facebook.jpg"></a></li>
					  <li><a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fwww.bozemaninteractive.com&text=Bozeman%20Website%20Design%20and%20Bozeman%20Graphic%20Design:%20https%3A%2F%2Fwww.bozemaninteractive.com&via=BZN_Interactive" target="_blank" title="Tweet"><img alt="Tweet" src="<?php echo site_url();?>/images/flat_web_icon_set/Twitter.jpg"></a></li>
					  <li><a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.bozemaninteractive.com" target="_blank" title="Share on Google+"><img alt="Share on Google+" src="<?php echo site_url();?>/images/flat_web_icon_set/Google_.jpg"></a></li>
					  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.bozemaninteractive.com&title=Bozeman%20Website%20Design%20and%20Bozeman%20Graphic%20Design&summary=Bozeman%20Website%20Design%20and%20Bozeman%20Graphic%20Design.%20Bozeman%20Interactive%20is%20your%20local%20provider%20for%20all%20your%20marketing%20needs.&source=https%3A%2F%2Fwww.bozemaninteractive.com" target="_blank" title="Share on LinkedIn"><img alt="Share on LinkedIn" src="<?php echo site_url();?>/images/flat_web_icon_set/LinkedIn.jpg"></a></li>
					  <li><a href="mailto:?subject=Bozeman%20Website%20Design%20and%20Bozeman%20Graphic%20Design&body=Bozeman%20Website%20Design%20and%20Bozeman%20Graphic%20Design.%20Bozeman%20Interactive%20is%20your%20local%20provider%20for%20all%20your%20marketing%20needs.:%20https%3A%2F%2Fwww.bozemaninteractive.com" target="_blank" title="Send email"><img alt="Send email" src="<?php echo site_url();?>/images/flat_web_icon_set/Email.jpg"></a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div id="fixedsupport">
	<div>(406) 781-2306</div>
	<a href="<?php echo site_url();?>/contact-us" title="Contact a Bozeman Interactive Designer" class="learnmore">Contact Us</a>
</div>
<script src="<?php echo site_url();?>/js/jquery.min.js"></script>
<script>
$( document ).ready(function() {
    $( "#burgerMenuIcon" ).click(function() {
	  if($( "#sidebar" ).hasClass( "closed" )){
		  $("#logosrc").attr("src", "https://www.bozemaninteractive.com/images/bozeman_website_design_large_logo.jpg");
		  $( "#sidebar" ).removeClass( "closed" ).addClass( "open" );
		  $( "#content" ).removeClass( "cSide" ).addClass( "oSide" );
		  $( "#burgerMenuIcon" ).removeClass( "closedmenu" ).addClass( "openedmenu" );
		  
		  setTimeout(function() {
			  $( "#nav" ).removeClass( "hide" ).addClass( "show" );
			  $( "#contactinfo" ).removeClass( "hide" ).addClass( "show" );
		   }, 500);
		  
		  $( "#header.open ul li.hassubnav" ).click(function() {
		  	var next = $(this).parent().next('ul');
		  	$(this).children("ul").slideToggle( "slow", function() {
		});
	});
	  }else{
		  $( "#sidebar" ).removeClass( "open" ).addClass( "closed" );
		  setTimeout(function() {
		  	$("#logosrc").attr("src", "https://www.bozemaninteractive.com/images/bozeman_website_design_small_logo.jpg");
		  }, 500);
		  $( "#nav" ).removeClass( "show" ).addClass( "hide" );
		  $( "#contactinfo" ).removeClass( "show" ).addClass( "hide" );
		  $( "#burgerMenuIcon" ).removeClass( "openedmenu" ).addClass( "closedmenu" );
		  $( "#content" ).removeClass( "oSide" ).addClass( "cSide" );
	  }
	});
});
</script>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40897931-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

    <footer>
        <div class="container">
        <div class="row">
        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h3><span class="text-info">Ron</span> <span class="text-success">Raney</h3>
            <p>Web developer, culinarian, gardener, musician, cultivator of the Tao, LaCroix addict, clean & sober.</p>
            <div class="social-icons">
                 <a href="mailto:rr@ronraney.com" target="_blank"><i class="fa fa-envelope-o fa-2x"></i></a>
                 <a href="https://twitter.com/RonnieRaney" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                 <a href="https://github.com/ronraney" target="_blank"><i class="fa fa-github fa-2x"></i></a>
                 <a href="https://stackexchange.com/users/2004210/ron-raney" target="_blank"><i class="fa fa-stack-overflow fa-2x"></i></a>
                 <a href="https://www.linkedin.com/in/ronnie-raney-3a456860" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
            </div>
			<hr>
        </div>
        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h3><span class="text-primary">About</span> </h3>
            <p>This website is built with WordPress and a custom Bootstrap 4 theme. If you would like help with a project, let me know.</p>
            <a class="btn btn-primary btn-lg btn-outline-success" href="/contact" role="button">Contact Me</a>
        </div>
        </div>
        </div>
    </footer>

<script>
jQuery(document).ready(function($){
    $(".navbar-nav").find("li.page_item").each(function(){
      $(this).addClass("nav-item");
    })
    $(".navbar-nav").find("li.page_item a").each(function(){
      $(this).addClass("nav-link");
    })
    $(".pagination").find("li.page_item a").each(function(){
      $(this).addClass("page-link");
    })
	var parallaxElements = $('.parallax'),
    parallaxQuantity = parallaxElements.length;

	$(window).on('scroll', function () {

	  window.requestAnimationFrame(function () {

		for (var i = 0; i < parallaxQuantity; i++) {
		  var currentElement = parallaxElements.eq(i);
		  var scrolled = $(window).scrollTop();

		  currentElement.css({
			'transform': 'translate3d(0,' + scrolled * -0.3 + 'px, 0)'
		  });
		}
	  });

	});
	
})
</script>
<?php wp_footer(); ?> 
  </body>
</html>

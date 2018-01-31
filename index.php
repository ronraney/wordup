
<?php get_header(); ?>
	<section class="parallax-container">
	  <div class="parallax" style="background: url('/wp-content/earth.jpg') center center / cover no-repeat;"></div>
	</section>
    <div class="container-fluid">
        <main role="main" class="container">
            <div class="bg-1 mt-3 jumbotron">
              <h1 class="display-4">I'm Ron Raney</h1>
              <h2 class="text-info">A developer and designer</h2>
              <p class="lead">I love to learn and share my knowledge</p>
              <hr class="my-4">
              <p class="text-light">Listed below are some of the platforms that I am currently working with. 2018 is going to be a great year.</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg btn-outline-success" href="#" role="button">More About Me</a>
              </p>
            </div>
			
            <div class="tab-card card mt-3">
                    <ul class="card-header nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#one" role="tab" aria-controls="home" aria-selected="true">PHP</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#two" role="tab" aria-controls="profile" aria-selected="false">Python</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#three" role="tab" aria-controls="contact" aria-selected="false">JavaScript</a>
                      </li>
                    </ul>
                    <div class="card-body tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="home-tab">Much of my experience has been in working with PHP content management systems. This website is built in WordPress with a custom Bootstrap 4 theme. I am planning to build an application in Drupal and DrupalGap soon. This will be a sort of e-commerce website for local vendors and restaurants.</div>
                      <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="profile-tab">I really enjoy Python and Django. I am working on a web application that will share random tidbits of wisdom from Eastern mysticism, specifically the Tao.</div>
                      <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="contact-tab">My experience with JavaScript began with jQuery, and I started using AngularJS shortly after its inception. I am now learning Angular, TypeScript and ES6, and I hope to learn Vue and React this year. My hope is to have several applications built in the next few months.</div>
                    </div>
            </div>
			<section class="parallax-container-2">
			  <div class="parallax" style="background: url('/wp-content/circuit-board.jpg') no-repeat;"></div>
			</section>
              <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
        
                    get_template_part( 'content', get_post_format() );
                
                endwhile; ?>
                <!--nav>
                    <ul class="pagination pager">
                        <li class="page-item"><?php next_posts_link( 'Previous' ); ?></li>
                        <li class="page-item"><?php previous_posts_link( 'Next' ); ?></li>
                    </ul>
                </nav-->
                <?php endif; 
                ?>
        </main>
		
    </div>
<?php get_footer(); ?>



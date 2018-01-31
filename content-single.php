<div class="container blog-post-single ">

	<div class="mt-3 blog-post card">
        <?php if ( has_post_thumbnail() ) {?>
		<div class="card-body">
			<?php the_post_thumbnail('post-feature'); ?>
			<div class="mt-3 pl-6 card-title">
                <h2 class="blog-post-title">
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a>
                </h2>
            </div>
			<div class="pl-6 mt-2 card-subtitle mb-2 text-muted">
                <p class="blog-post-meta">
                <?php echo apply_filters( 'the_date', get_the_date(), 
                get_option( 'date_format' ), '', '' ); ?> 
                by <a href="#"><?php the_author(); ?></a>
                </p>
            </div>
			<div class="pl-6 card-text"><?php the_content(); ?></div>
		</div>
        <?php } else { ?>
        <div class="card-body">
			<div class="pl-6 card-title">
                <h2 class="blog-post-title">
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a>
                </h2>
            </div>
			<div class="pl-6 mt-2 card-subtitle mb-2 text-muted">
                <p class="blog-post-meta">
                <?php echo apply_filters( 'the_date', get_the_date(), 
                get_option( 'date_format' ), '', '' ); ?> 
                by <a href="#"><?php the_author(); ?></a>
                </p>
            </div>
			<div class="pl-6 card-text"><?php the_content(); ?></div>
		</div>
        <?php } ?>
	</div><!-- /.blog-post -->


</div><!-- /.blog-post -->
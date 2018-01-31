
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A theme based on the Offcanvas Bootstrap example">
    <meta name="author" content="Ron Raney">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

        
<?php wp_head();?>
  </head>
<body class="bg-light">
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-1">
              <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><h2><?php echo get_bloginfo( 'name' ); ?></h2></a>
              <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo get_bloginfo( 'wpurl' );?>">Welcome <span class="sr-only">(current)</span></a>
                  </li>
                    <!--?php
                    wp_nav_menu( array( 
                        'theme_location' => 'my-custom-menu', 
                        'container_class' => 'custom-menu-class' ) ); 
                    ?-->
                    <?php wp_list_pages( '&title_li=' ); ?>
                  
                  
                  <!--li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div-->
                  
                </ul>
                <!--form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form-->
              </div>
        </nav>
	

        <!--div class="container-fluid nav-scroller bg-white box-shadow">
            <nav class="nav nav-underline">
                <a class="nav-link active" href="#"><h4>Archives</h4></a>
                <ol class="list-unstyled">
                <!?php wp_get_archives(
                array(
                    'before' => '<span class="nav-link">', 
                    'after' => '</span>', 
                    'type=monthly',)
                    ); ?>
                </ol>
            </nav>
       </div-->

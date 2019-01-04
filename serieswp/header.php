
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body >

<ul class="nav navbar-light as sticky-top">
    <a class="navbar-brand" href="#">  <?php if(function_exists('the_custom_logo')){
                the_custom_logo();
    }  ?> </a>
    <div class="container">
        <?php 
        $nav = wp_get_nav_menu_items('nav');
        //var_dump($nav);
        foreach($nav as $key => $value)
        {
            ?> <li class="nav-item "> 
                    <a class="navbar-brand" href="<?php echo $value->url ; ?>"> <?php echo $value->title ; ?> </a>                   
            </li>
        <?php    
        }
        ?>
    <div>
</ul>

	<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">


			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();

					?>

					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
	</header><!-- #masthead -->


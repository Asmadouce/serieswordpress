<?php wp_footer(); ?>

<section class="as">

    <div class="container">
        <div class="row">

        <a href="#">  <?php if(function_exists('the_custom_logo')){
            the_custom_logo(100,100,true);
             }  ?> </a>
            <ul class="col-11 nav justify-content-end ">
                    <?php 
                $nav = wp_get_nav_menu_items('footer');
                //var_dump($nav);
                foreach($nav as $key => $value)
                {
                    ?> <li class="nav-item "> 
                            <a class="navbar-brand" href="<?php echo $value->url ; ?>"> <?php echo $value->title ; ?> </a>                   
                    </li>
                <?php    
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fab fa-facebook-f fa-2x"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fab fa-instagram fa-2x"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fab fa-twitter fa-2x"></i></a>
                </li>   
            </ul>
        </div>
    </div>
</section>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  <?php language_attributes(); ?>> 
    <head>    
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>  
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />  
        <meta name="description" content="<?php bloginfo('description'); ?>" />   
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> 
        <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" /> 
        <link rel="alternate" type="application/atom+xml" title="Atom Feed" href="<?php bloginfo('atom_url'); ?>" /> 
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?> 
    </head> 
    <body  <?php body_class(); ?>>  
        <div id="header"> 
            <h1><?php bloginfo('name'); ?></h1> 
        </div> <!-- #header --> 
        <div id="main"> 
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>  
                    <h2 id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>"> 
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link  to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> 
                    </h2>
                    <?php the_content(); ?>  
                    <?php wp_link_pages(); ?> 
                    <div class="commentblock">   
                        <?php comments_template(); ?>   
                    </div><!--commentblock-->   
                <?php endwhile; ?>  
                <div class="navigation">      
                    <div class="alignleft"><?php posts_nav_link(); ?></div>      
                    <div class="clear"><!-- --></div>     
                </div><!-- .navigation --> 
            <?php else: ?>  
                <h2>Not Found</h2>
                <p>The posts you were looking for could not be found.</p> 
            <?php endif; ?> 
        </div> <!-- #main --> 
        <div id="sidebar">  
            <?php if (!dynamic_sidebar('Sidebar')) : endif; ?> 
        </div> <!-- #sidebar --> 
        <div id="footer">  
            <p>&copy;  <?php
                echo date('Y ');
                bloginfo('name');
                ?>
            </p>
        </div> <!-- #footer -->  
        <?php wp_footer(); ?> 
    </body> 
</html> 

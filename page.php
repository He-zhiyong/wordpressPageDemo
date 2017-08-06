<?php get_header(); ?>
 <?php if (have_posts()) : the_post(); update_post_caches($posts);
        $title = get_the_title();
        $content = get_the_content();
        ?>   
        <div class="banner"></div>
        <?php require('sidebar-nav.php'); ?>
        <?php require('title.php'); ?>
        <hr>
        <div class="main">                 
                    <!-- Blog Post -->
                    <div class="post">
                        <div class="content">
                            <!-- Post Content -->
                            <?php echo $content; ?>
                        </div>
                    </div>   
                <?php endif; ?>
                <?php require('main-right.php'); ?>    
        </div>
 
<?php get_footer(); ?>
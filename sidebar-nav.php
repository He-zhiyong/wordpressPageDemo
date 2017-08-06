<div class="nav">
        	<ul>
	            	<?php
                        $posts = get_posts('numberposts=6&orderby=id&cat=2');
                        foreach($posts as $post) {
                            setup_postdata($post);
                            echo '<li><a target="_blank" href="' . get_permalink() . '">' . get_the_title() . '</li>';
                        }
                        $post = $posts[0];
                    ?> 
	         </ul>           
</div>

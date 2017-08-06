<div class="main-right">
	<div class="main-right01">
		<ul>
	       <li><img src="<?php echo get_template_directory_uri()?>/images/icon01.png" /><a href="mailto:secretary@hdu.edu.cn">书记信箱</a></li>
	       <li><img src="<?php echo get_template_directory_uri()?>/images/icon01.png" /><a href="mailto:president@hdu.edu.cn">校长信箱</a></li>
	       <li><img src="<?php echo get_template_directory_uri()?>/images/icon02.png" /><a target="_blank" href="http://i.hdu.edu.cn/">数字杭电</a></li>
	       <li><img src="<?php echo get_template_directory_uri()?>/images/icon03.png" /><a href="http://hdudangweioffice-wordpress.stor.sinaapp.com/uploads/2014/12/2014060410262427281.xls">杭电校历</a></li>     	
	    </ul>
	    <a class="more02" target="_blank" href="http://www.hdu.edu.cn/">更多>></a>
	</div>
	<div class="main-right02">
		<img src="<?php echo get_template_directory_uri()?>/images/schoolphoto.png" />
	</div>
	<div class="main-right03">
		 <?php
            $id=32;//这里是文章的ID
            $post = get_post($id)->post_content;
            echo $post;//输出文章的内容
              ?>
	</div>	
</div>
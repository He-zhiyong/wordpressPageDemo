<div class="main-mid">	
        <div id="exp2" class="exmp smallslider">
          <?php
            $id=351;//这里是文章的ID
            $post = get_post($id)->post_content;
            echo $post;//输出文章的内容
              ?>
        </div>
	<div class="main-mid02">
      <h4>要闻公告 News</h4>
		  <a class="more01" target="_blank" href="http://news.hdu.edu.cn">更多>></a>
	</div>
  <div class="main-mid03">
          <?php
            $id=324;//这里是文章的ID
            $post = get_post($id)->post_content;
            echo $post;//输出文章的内容
              ?>
  </div>
</div>

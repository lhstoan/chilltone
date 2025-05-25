<!-- #topic_path -->
<div id="topic_path">
  <div class="inner clearfix">
    <ul>
      <li><a class="anim fancy_title wow fadeInUp" href="<?php echo home_url(); ?>/">TOP</a></li>
      <?php if(is_404()){ ?>
        <?php  echo '<li>404 not found</li>'; ?>
      <?php }else{ ?>
  			<?php if ( is_single('blog') ) { echo '<li><a class="anim fancy_title wow fadeInUp" href="'.home_url().'/blog/">ブログ一覧</a></li>'; ?>
  			<li class="anim fancy_title wow fadeInUp"><?php echo strip_tags(get_the_title()); ?></li>
        <?php } ?>
  			<?php if ( is_archive('blog') ) { echo '<li class="anim fancy_title wow fadeInUp">ブログ一覧</li>'; ?>
  			<?php } else  { ?>
        <li class="anim fancy_title wow fadeInUp"><?php echo strip_tags(get_the_title()); ?></li>
        <?php } ?>
      <?php } ?>
    </ul>
  </div>
</div>
<!-- end #topic_path -->
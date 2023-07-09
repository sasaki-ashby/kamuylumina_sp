<?php
/*
Template Name: オリジナル(空白)
*/
?>
<?php wp_head(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<!-- ループ開始 -->
<?php the_content(); ?>
<?php endwhile; endif; ?>
<!-- ループ終了 -->
<?php wp_footer();?>
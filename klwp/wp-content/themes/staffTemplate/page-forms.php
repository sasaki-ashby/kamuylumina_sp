<?php
/*
Template Name: フォームアンケート用
*/
?>
<?php require_once(get_template_directory().'/page/forms/header.php');?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<!-- ループ開始 -->
<?php the_content(); ?>
<?php endwhile; endif; ?>
<!-- ループ終了 -->
<?php require_once(get_template_directory().'/page/forms/footer.php');?>

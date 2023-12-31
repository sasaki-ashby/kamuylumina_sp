<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/sp/include/header.php');?>
<main class="article-main">
	<article>
		<nav class="breadcrumb">
			<ol class="breadcrumb_list">
				<li><a href="<?php echo lang_link( '/sp/' , $sp_lang ,$sp_lang);?>"><?php echo $common_lang_text["トップ"];?></a></li>
				<li><?php echo $common_lang_text["阿寒を楽しむ"];?></li>
			</ol>
		</nav>
		<h1 class="article-title article_main_container"><?php echo $common_lang_text["阿寒を楽しむ"];?><span class="SubText">ARTICLE LIST</span></h1>
		<div class="middle-main-container">
			<div class="Container">
				<nav class="top-middle-container">
					<p class="TextAll TextContainer __current">
						<a href="<?php echo lang_link( '/sp/enjoy/' , $sp_lang ,$sp_lang);?>"><?php echo $common_lang_text["すべて"];?></a>
					</p>
					<ul class="articleNav-list">
						<?php
						$taxonomy_name = 'tax_enjoy'; //取得したいタクソノミー名
						$parent_terms = get_terms( $taxonomy_name, array( 'hide_empty' => false, 'parent' => 0 ) ); //第一階層のタームだけ取得
						foreach ( $parent_terms as $taxonomy ) {
							?>
						<li><span data-spot="<?php echo $taxonomy->slug;?>"><?php echo get_field("tax_enjoy-lang_name_$sp_lang","tax_enjoy_".$taxonomy->term_id);?></span></li>
						<?php
						}
						?>
					</ul>
				</nav>
			</div>
		</div>
		<ul class="spot-list">
			<?php
			//$args = array('post_type' => 'enjoy','posts_per_page' => -1,'tax_query' => array(array('taxonomy' => $tax_name,'field' => 'slug','terms' => $g_term_slug)));
			$args = array(
				'post_type' => 'enjoy',
				'posts_per_page' => -1,
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$tax_list = get_field( 'tax_enjoy' );
					?>
			<!-- 記事1件:start/ -->
			<li class="spot-container<?php foreach ( $tax_list as $tax ) {echo ' '.$tax->slug;}?>">
			<ul class="category-tag">
				<?php
				foreach ( $tax_list as $tax ) {
					?>
				<li><?php echo get_field("tax_enjoy-lang_name_$sp_lang","tax_enjoy_".$tax->term_id);?></li>
				<?php } ?>
			</ul>
					
			<a class="spot-a" href="<?php echo lang_link( url_domain_del( get_permalink() ) , $sp_lang , $sp_lang);?>">
			<div class="hover-area">
				<p class="hover-area_img"><img class="spot-image" src="<?php the_field('head_img_thum');?>" alt=""/></p>
				<p class="spot-text"><?php echo the_field("head_title_$sp_lang");?></p>
			</div>
			</a></li>
			<!-- /記事1件:end -->
			<?php
			}
			}
			wp_reset_postdata();
			?>
		</ul>
	</article>
	<!--
	<p id="moreButton" class="btn-text more_btn"><?php echo $common_lang_text["VIEW MORE"];?><span class="plus-icon">+</span></p>
	-->
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/sp/include/footer.php');?>
</body></html>

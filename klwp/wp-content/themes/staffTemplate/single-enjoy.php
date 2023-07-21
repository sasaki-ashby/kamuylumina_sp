<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/sp/include/header.php');?>
<main class="main-container" style="background-image:url(<?php the_field('head_img_main');?>);">
	<article class="middle-main-container">
		<div class="middle-main-container_mobile">
			<nav class="breadcrumb">
				<ol class="breadcrumb_list">
					<li><a href="<?php echo lang_link( '/sp/' , $sp_lang ,$sp_lang);?>"><?php echo $common_lang_text["トップ"];?></a></li>
					<li><a href="<?php echo lang_link( '/sp/enjoy/' , $sp_lang ,$sp_lang);?>"><?php echo $common_lang_text["阿寒を楽しむ"];?></a></li>
					<li><?php echo the_field("head_title_$sp_lang");?></li>
				</ol>
			</nav>
			<section class="middle-container">
				<h1 class="middle-title"><?php echo the_field("head_title_h_$sp_lang");?></h1>
				<div class="tag-lang-container">
					<div class="date-tag-container">
						<p class="date">
							<?php the_time('Y.m.d');?>
						</p>
						<ul class="tag-container">
							<?php
							$tax_list = get_field( 'tax_enjoy' );
							foreach ( $tax_list as $object ) {
								?>
							<li><a href="<?php echo get_term_link( $object );?>"><?php echo get_field("lang_name_$sp_lang","tax_enjoy_".$object->term_id);?></a></li>
							<?php } ?>
						</ul>
					</div>
					<ul class="lang-container">
						<li class="lang-text-1 <?php if( $sp_lang == "ni"){echo " __current";}?>"><a href="<?php echo lang_link2($_SERVER['REQUEST_URI'],"ni",$sp_lang);?>">日本語</a></li>
						<li class="lang-text-2 <?php if( $sp_lang == "en"){echo " __current";}?>"><a href="<?php echo lang_link2($_SERVER['REQUEST_URI'],"en",$sp_lang);?>">ENGLISH</a></li>
						<li class="lang-text-3 <?php if( $sp_lang == "tc"){echo " __current";}?>"><a href="<?php echo lang_link2($_SERVER['REQUEST_URI'],"tc",$sp_lang);?>">繁体字</a></li>
					</ul>
				</div>
				<section class="middle-container">
					<section>
						<?php if ( have_rows( 'body' ) ) { while ( have_rows( 'body' ) ): the_row(); ?>
						<?php if( get_row_layout() == 'h2' ){/*見出し1*/?>
						<h2 class="detail-title">
							<?php the_sub_field( $sp_lang );?>
						</h2>
						<?php }elseif( get_row_layout() == 'h3' ){ /*テキスト(横幅いっぱい)*/?>
						<h3 class="detail-title">
							<?php the_sub_field( $sp_lang );?>
						</h3>
						<?php }elseif( get_row_layout() == 'text_w' ){ /*テキスト(横幅いっぱい)*/?>
						<p class="detail-text">
							<?php the_sub_field( $sp_lang );?>
						</p>
						<?php }elseif( get_row_layout() == 'img_w' ){ /*画像(横幅いっぱい)*/?>
						<figure class="detail-img"><img src="<?php the_sub_field( "img" );?>" alt="<?php echo get_sub_field( "alt" )[$sp_lang];?>" /></figure>
						<?php }?>
						<?php endwhile;}?>
					</section>
				</section>
			</section>
		</div>
		<?php
		$object = get_field( 'reference' );
		if ( $object ) {
			?>
		<div class="detail-img-container">
			<section class="reference">
				<h3 class="detail-title">
					<?php the_field("name_$sp_lang",$object->taxonomy."_".$object->term_id);?>
				</h3>
				<p class="detail-text">
					<?php the_field("address_$sp_lang",$object->taxonomy."_".$object->term_id);?>
				</p>
				<figure class="googlemap">
					<iframe src="<?php the_field("googlemap",$object->taxonomy."_".$object->term_id);?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</figure>
			</section>
		</div>
		<?php
		}
		?>
	</article>
	<a href="<?php echo lang_link("/sp/enjoy/",$sp_lang,$sp_lang);?>">
	<nav class="prevbtn">
		<p class="prevbtn_text"><?php echo $common_lang_text["記事一覧"];?></p>
		<img class="prevbtn_icon" src="/assets/sp/common/img/icons/arrow_right.png"></nav>
	</a>
</main>
<!-- 関連記事------------------------------- -->
<section class="related-main-container">
	<h3 class="related-title"><?php echo $common_lang_text["関連記事"];?></h3>
	<p class="related-sub-title">RELATED ARTICLES</p>
	<ul class="related-container">
		<?php
		$feed_post = get_field( 'relation_enjoy' );
		foreach ( $feed_post as $object ) {
			?>
		<li><a href="<?php echo get_the_permalink($object->ID ); ?>">
		<figure><img src="<?php the_field('head_img_thum', $object->ID );?>" /></figure>
		<p class="reated-text"><?php echo $object->post_title; ?></p>
		</a> </li>
		<li>
		<?php } ?>
	</ul>
</section>
<!-- 関連記事------------------------------- -->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/sp/include/footer.php');?>
</body></html>

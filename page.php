<?php get_header()?>
	<div class="article">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<?php setPostViews(get_the_ID())?>
		<div class="entry post">
			<h2 class="entry-title"><?php the_title(  )?></h2>
			<div class="entry-meta">
				<span>
					<em class="kan"><?php echo getPostViews(get_the_ID()) ?></em>
					<em class="ping"><a href="" class="comments-link" ><?php comments_popup_link('0','1','%')?></a></em>
				</span>
				<?php the_time( 'Y年m月d日 H:i:s' )?> 
			</div><!-- .entry-meta -->
			<div class="entry-cnt">
				<div class="entry-arch">
					<?php the_content()?>
				</div><!-- .entry-arch -->
			</div><!-- .entry-cnt -->
		</div><!-- .entry .post -->
	<?php endwhile; ?>
	<?php endif; ?>
	<!-- <?php comment_form( ) ?> -->
	</div><!-- .article -->

	<?php get_sidebar()?>
<?php get_footer()?>
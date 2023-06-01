<?php get_header() ?>
	<div class="article">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<div class="entry">
			<h2 class="entry-title"><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h2>
			<div class="entry-meta">
                <span>
                    <em class="kan"><?php echo getPostViews(get_the_ID())?></em>
                    <em class="ping"><?php comments_popup_link('0','1','%') ?></em>
                </span>
				<?php the_category( ',')?> | <?php the_time( 'Y年m月d日 H:i:s' )?> 
				<?php edit_post_link('编辑本文')?>
			</div><!-- .entry-meta -->
			<div class="entry-cnt">
                <!--缩略图-->
				<div class="entry-thumbnail">
					<a href="<?php the_permalink()?>" >
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'thumbnail' ); ?>
						<?php else: ?>
						<?php endif; ?>
					</a>
				</div>
				<div class="entry-arch">
				<?php echo customize_strimwidth(get_the_content(),190,0)?>	
				</div><!-- .entry-arch -->
			</div>
			<div class="entry-tag">
                <a href="<?php echo get_comments_link()?>">添加评论</a>
				<a class="more" href="<?php the_permalink()?>" >查看全文»</a>
			</div>
		</div><!-- .entry -->			
	<!-- 在这里调用数据 -->
	<?php endwhile; ?>
		<?php lingfeng_pagenavi()?>
	<?php endif; ?>
	</div><!-- .article -->

	<?php get_sidebar()?>				
<?php get_footer()?>
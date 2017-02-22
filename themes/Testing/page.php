<?php get_header();?>
	<?php while(have_posts()): the_post(); ?>
		<div class="contentbg">
				<div class="post">
					<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<div class="entry">
					<?php the_content('Read More');?>
					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<div class="entry">
					<?php the_content('Read More');?>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	<?php endwhile;?>
<?php get_footer();?>	
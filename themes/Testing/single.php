<?php get_header();?>
	<?php while(have_posts()): the_post(); ?>
		<div class="contentbg">
				<div class="post">
					<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<p class="meta">Posted by <a href="#"><?php the_author_posts_link();?></a> on <?php the_time('F jS, Y');?>
						&nbsp;&bull;&nbsp; <a href="<?php comments_link();?>" class="comments"><?php comments_number('0 Comments','1 Comments','%responses')?>
						</a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink();?>" class="permalink">Full article</a></p>
					<div class="entry">
					<?php the_content('Read More');?>
					</div>
				</div>
				
				<div style="clear: both;">&nbsp;</div>
			</div>
	<?php endwhile;?>
	<?php comments_template();?>
<?php get_footer();?>	
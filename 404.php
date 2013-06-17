<?php @header("HTTP/1.1 404 Not found", true, 404);?>
<?php disallow_direct_load('404.php');?>
<?php get_header(); ?>
	<div class="container">
		<?php the_post();?>
		<div class="row page-content" id="<?=$post->post_name?>">
			<div class="span12">
				<article>
					<h2>Page Not Found</h2>
					<?php 
					$page = get_page_by_title('404');
						if($page){
							$content = $page->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
						}
					?>
					<?php if($content):?>
					<?=$content?>
					<?php else:?>
					<p>The page you requested doesn't exist.  Sorry about that.</p>
					<?php endif;?>
				</article>
			</div>
		</div>
	</div>
<?php get_footer();?>
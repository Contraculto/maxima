<?php get_header(); ?>
	
	<div id="main">
	
		<div id="content">

			<?php
			if (have_posts()) {
				$postCount=0;
				while (have_posts()) {
					the_post();
					$postCount++;
					?>
					<div class="single" id="single_<?php echo $postCount ;?>">
						<div class="single_title">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a> <small><?php edit_post_link('Editar'); ?></small></h2>
							<p>Publicado: <?php the_time('F j, Y'); ?> a las <?php the_time('g:i a'); ?></p>
							<p>Categor&iacute;as: <?php the_category(','); ?>.</p>
							<p><a href="<?php comments_link(); ?>"><?php comments_number('No hay comentarios', 'Un comentario', '% comentarios'); ?></a>.</p>
						</div>
						<div class="single_body">
							<?php the_content('Continue reading &raquo;'); ?>
						</div>
					</div>
					<?php
					comments_template();
				} ?>
				<div id="content_nav">
					<div id="content_nav_next"><?php next_posts_link('Next entries') ?></div>
					<div id="content_nav_prev"><?php previous_posts_link('Previous entries') ?></div>
				</div>
			<?php
			} else {
			?>

				<h2>404.</h2>
				<p>Document not found.</p>

			<?php
			}
			?>

		</div>
	
		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>

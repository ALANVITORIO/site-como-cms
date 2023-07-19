<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="<?php the_field('link_mapa'); ?>" target="_blank"><img src="<?php the_field('imagem_mapa'); ?> alt=" Fachada do Rest"></a>
			</div>

			<?php if (have_rows('info_contato')) : ?>
				<?php while (have_rows('info_contato')) : the_row(); ?>
					<div class="grid-1-3 contato-item">
						<h2><?php the_sub_field('titulo'); ?></h2>
						<?php if (have_rows('descricao')) : ?>
							<?php while (have_rows('descricao')) : the_row(); ?>
								<p><?php the_sub_field('item'); ?></p>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</section>

<?php endwhile;
else :
endif;
?>


<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>

  <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <!-- Header Wordpress -->
  <?php wp_head(); ?>
  <!-- Fecha Header Wordpress -->
</head>

<body>

  <header>
    <nav>
      <ul>
        <li class="current_page_item"><a href="/">Menu</a></li>
        <li><a href="/sobre/">Sobre</a></li>
        <li><a href="/contato/">Contato</a></li>
      </ul>
    </nav>

    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

    <p>Rua Marechal 29 – Copacabana – Rj</p>
    <!-- 			<?php $sobre = get_page_by_title('Sobre')->ID; ?>
			<p><?php echo get_post_meta($sobre, 'historia', true); ?></p> -->

    <!-- 			<?php
                $home = get_page_by_title('Menu da Semana')->ID;
                $post_hello = 1;
                ?> -->


    <!-- 			<p><?php the_field2('comida', $home); ?></p>
			<p><?php the_field2('comida', $post_hello); ?></p> -->
    <!-- 			<p><?php echo get_post_meta($home, 'comida', true); ?></p>
			<p><?php echo get_post_meta($post_hello, 'comida', true); ?></p> -->

    <?php $contato = get_page_by_title('Contato')->ID; ?>
    <p class="telefone"><?php the_field2('telefone', $contato); ?></p>
  </header>
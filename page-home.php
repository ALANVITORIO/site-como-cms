<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="container">
      <h2 class="subtitulo"><?php the_title(); ?></h2>

      <div class="menu-item grid-8">
        <h2>Peixes</h2>
        <ul>
          <?php
          $peixes = get_field2('peixes');
          if (isset($peixes)) {
            foreach ($peixes as $peixe) {
          ?>
              <li>
                <span><sup>R$</sup><?php echo $peixe['preco']; ?></span>
                <div>
                  <h3><?php echo $peixe['nome']; ?></h3>
                  <p><?php echo $peixe['descricao']; ?></p>
                </div>
              </li>
          <?php }
          } ?>
        </ul>
      </div>

      <div class="menu-item grid-8">
        <h2>Carnes</h2>
        <ul>
          <?php
          $carnes = get_field2('carnes');
          if (isset($carnes)) {
            foreach ($carnes as $carne) {
          ?>
              <li>
                <span><sup>R$</sup><?php echo $carne['preco']; ?></span>
                <div>
                  <h3><?php echo $carne['nome']; ?></h3>
                  <p><?php echo $carne['descricao']; ?></p>
                </div>
              </li>
          <?php }
          } ?>
        </ul>
      </div>


    </section>
<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>
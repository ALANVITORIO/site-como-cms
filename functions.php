<?php


add_post_type_support('page', 'custom-fields'); // Para páginas
add_post_type_support('post', 'custom-fields'); // Para posts


function get_field2($key, $page_id = 0)
{
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field2($key, $page_id = 0)
{
  echo get_field2($key, $page_id);
}


add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home()
{
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Menu da Semana - CMB2',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

  // Campo de grupo para peixes
  $peixes = $cmb->add_field([
    'name' => 'Peixes',
    'id' => 'peixes',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Peixe {#}',
      'add_button' => 'Adicionar Peixe',
      'sortable' => true,
    ]
  ]);

  $cmb->add_group_field($peixes, [
    'name' => 'Nome',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($peixes, [
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($peixes, [
    'name' => 'Preço',
    'id' => 'preco',
    'type' => 'text',
  ]);

  // Campo de grupo para carnes
  $carnes = $cmb->add_field([
    'name' => 'Carnes',
    'id' => 'carnes',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Carne {#}',
      'add_button' => 'Adicionar Carne',
      'sortable' => true,
    ]
  ]);

  $cmb->add_group_field($carnes, [
    'name' => 'Nome',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($carnes, [
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($carnes, [
    'name' => 'Preço',
    'id' => 'preco',
    'type' => 'text',
  ]);
}


add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre()
{
  $cmb = new_cmb2_box([
    'id' => 'sobre_box',
    'title' => 'Sobre',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Foto Rest',
    'id' => 'foto_rest',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
}

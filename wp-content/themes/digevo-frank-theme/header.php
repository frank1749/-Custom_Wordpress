<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '·',TRUE,'right' ); bloginfo( 'name' ); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">

    <!-- styles -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <!-- scripts -->
    <script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>

    <?php wp_head(); ?>
</head>

<body>

  <!--Dar interactividad al menu en responsive-->
<script type="text/javascript">

          $(document).ready(function()
        {
          toggleMenu();

        });

        function toggleMenu()
      {
      var button = $("#header-menu-btn");
      var menu = $(".menu");

      button.on('click', function() {
        menu.slideToggle();
      });

    $(window).on("resize", function() {
      var width = $(window).width();
      if (width > 320 && menu.is(":hidden")) {
        menu.removeAttr("style");
      }
    });
    }
</script>
<!--Fin del codigo-->
  <header class="container-fk">

    <figure class="icon-home">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id(9) );?>
      <a href="/digevo-frank"><img src="<?php echo $url; ?>" alt="Imagen Logo" /></a>
    </figure>

    <div class="menu-principal">

      <button type="button" class="header-menu-btn" id="header-menu-btn">Menú</button>
      <?php wp_nav_menu(array(
      'container'       => 'nav',
      'container_id'    => 'menu',
      'container_class' => 'menu',
      'menu_id' => '2',
      )); ?>

    </div>

  </header>
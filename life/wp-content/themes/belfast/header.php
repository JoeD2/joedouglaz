<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>

  </head>
</html>
<body <?php body_class();?>>

<header class="sticky-top">
  <div class="navbar navbar-expand-lg navbar-light">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'top-menu',
        'menu_class' => 'navigation',
      )
    );?>
  </div>

</header>

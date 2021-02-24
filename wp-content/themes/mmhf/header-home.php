<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MMH_Forensics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mmhf' ); ?></a>


	<header id="masthead" class="header-home">
	<nav class="navbar navbar-expand-md">
  <div class="container">
    <button class="navbar-toggler me-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
			<div class="icon nav-icon-5">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
	    <div class="collapse navbar-collapse w-100 d-flex justify-content-end" id="navbarTogglerDemo01">
      		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'mmhf'); ?></button>
				<?php
          wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container' => 'ul',
                        'menu_class' =>	'nav-item',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'navbar-nav'
                    ) ); ?>
    </div>
  </div>
</nav>

	</header>


<!-- <header class="">
  <nav class="navbar navbar-expand-md ">
    <div class="container-fluid">
     <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler me-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <div class="icon nav-icon-5">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
	   <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navbarTogglerDemo01">
			 <ul class="navbar-nav list-inline">
					<li class=" list-inline-item px-1 nav-item active">
						<a class="nav-link text-decoration-none pb-1" href="../">Home</a>
					</li>
					<li class="list-inline-item px-1 nav-item ">
						<a  class="nav-link text-decoration-none pb-1" href="../team">Team</a>
					</li>
					<li class="list-inline-item px-1 nav-item  ">
						<a  class="nav-link text-decoration-none pb-1" href="../manifesto">Manifesto</a>
					</li>
					<li class="list-inline-item px-1 nav-item ">
						<a class="nav-link text-decoration-none pb-1" href="../mission">Mission</a>
					</li>
	      </ul>
    	</div>
    </div>
  </nav>
</header> -->

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
   

		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/css/materialize.css"  media="screen,projection"/>

		

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/favicon-16x16.png">

<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/favicon.ico" >


<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ; ?>/assets/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

 
		<?php wp_head(); ?>
	</head>


<!-- Preloader -->
<div id="preloader">
    <div id="status">
    	<div class="preloader-wrapper big active">
		    <div class="spinner-layer spinner-green-only">
		      <div class="circle-clipper left">
		        <div class="circle"></div>
		      </div><div class="gap-patch">
		        <div class="circle"></div>
		      </div><div class="circle-clipper right">
		        <div class="circle"></div>
		      </div>
		    </div>
		</div>
    </div> <!-- //status -->
</div> <!-- //preloader -->



	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	 
	<?php do_action('foundationPress_layout_start'); ?>


 
	<?php get_template_part('parts/top-bar'); ?>

<?php// if(is_front_page()): ?>
		
<?php // endif; ?>


	<?php do_action('foundationPress_after_header'); ?>






 <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red modal-trigger" href="#modalContato">
      <i class="large mdi-communication-chat"></i>
    </a>
  </div>


  <!-- Modal Structure -->
  <div id="modalContato" class="modal">
    <div class="modal-content">
    	<div class="formulario-de-contato">
			<?php echo do_shortcode( '[contact-form-7 id="31" title="Formulário de contato 1"]' ); ?>
    	</div> <!-- //formulario-de-contato -->
    </div>
  </div>



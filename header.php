<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php 
    $current_title = wp_get_document_title();
    if ( is_singular( 'sites' ) ) {
      $site_url = get_the_title();
      $current_title = 'SEO-аналіз і аудит сайту ' . $site_url . ': оптимізація сайту';
      $current_description = 'Технічні показники сайту ' . $site_url . '. Внутрішня оптимізація (перевірка сторінок). Зовнішня оптимізація сайту. Показники.';
    }
  ?>
  <title><?php echo $current_title; ?></title>
  <?php if ($current_description): ?>
    <meta name="description" content="<?php echo $current_description; ?>"/>
  <?php endif; ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="border-b border-gray-200 py-4">
    <div class="container">
      <div class="flex justify-between items-center">
        <div>
          <a href="<?php echo home_url(); ?>" class="bg-indigo-600 rounded-lg text-gray-200 text-xl px-3 py-1">
            🤘 blog <span class="text-yellow-400"> for</span> rock
          </a>
        </div>
        <div class="menu hidden lg:block">
          <?php wp_nav_menu([
            'theme_location' => 'main',
            'container' => 'div',
            'menu_class' => 'flex flex-col lg:flex-row'
          ]); ?> 
        </div>
        <div class="block lg:hidden menu-click z-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
          </svg>
        </div>
      </div>
    </div>
  </header>
  <div class="wrap">
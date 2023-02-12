<?php 
  get_header(); 
  $current_id = get_the_ID();
  $countNumber = tutCount($current_id);
?>

<div class="bg-zinc-800 text-gray-200 py-16 mb-10">
  <div class="container">
    <!-- breadcrumbs -->
    <div class="breadcrumbs text-sm text-gray-400 mb-4" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <ul class="flex items-center flex-wrap">
        <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item pr-4">
          <a itemprop="item" href="<?php echo home_url(); ?>" class="hover:text-blue-500">
            <span itemprop="name"><?php _e( 'Головна', 'treba-wp' ); ?></span>
          </a>                        
          <meta itemprop="position" content="1">
        </li>
        <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-4">
          <a itemprop="item" href="<?php echo get_post_type_archive_link('sites'); ?>" class="hover:text-blue-500">
            <span itemprop="name"><?php _e( 'Каталог сайтів', 'treba-wp' ); ?></span>
          </a>                        
          <meta itemprop="position" content="2">
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 font-light px-4">
          <span itemprop="name"><?php the_title(); ?></span>
          <meta itemprop="position" content="3" />
        </li>
      </ul>
    </div>
    <!-- end breadcrumbs -->
    <h1 class="text-3xl font-bold mb-6"><?php _e("SEO-аналіз і аудит сайту", "treba-wp"); ?> <span class="underline decoration-indigo-500"><?php the_title(); ?></span></h1>
    <div class="flex items-center text-sm opacity-75">
      <div class="flex items-center mr-4">
        <div class="mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
          </svg>
        </div>
        <?php _e("Дата аналізу", "treba-wp"); ?>: <?php echo get_the_modified_time('j.n.Y'); ?>;
      </div>
      <div class="flex items-center">
        <div class="mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        </div><?php _e("Переглядів", "treba-wp"); ?>: <?php echo $countNumber; ?></div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="flex flex-wrap lg:-mx-6 mb-10">
    <div class="w-full lg:w-3/4 lg:px-6 mb-10">
      <div class="mb-10">
        <h2 class="text-2xl font-bold mb-6">🔍 <?php _e("Що відомо про сайт", "treba-wp"); ?></h2>
        <!-- URL -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                </svg>
              </div>
              URL
            </div>
          </div>
          <div>
            <a href="http://<?php the_title(); ?>" target="_blank" rel="nofollow" class="font-light underline"><?php the_title(); ?></a>
          </div>
        </div>
        <!-- Status -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                </svg>
              </div>
              Статус в WHOIS
            </div>
          </div>
          <div>
            <div class="inline-block bg-red-200 rounded-xl px-4 py-1"><?php _e("Зайнятий", "treba-wp"); ?></div>
          </div>
        </div>
        <!-- Age -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                </svg>
              </div>
              <?php _e("Вік сайту", "treba-wp"); ?>
            </div>
          </div>
          <div>
            <?php echo custom_meta_site($current_id, 'meta_site_age'); ?>
          </div>
        </div>
        <!-- Price -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <?php _e("Вартість сайту", "treba-wp"); ?>
            </div>
          </div>
          <div class="font-light">
            ≈ <?php echo custom_meta_site($current_id, 'meta_site_price'); ?>00$
          </div>
        </div>
        <!-- Lang programming -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                </svg>
              </div>
              <?php _e("Мова програмування", "treba-wp"); ?>
            </div>
          </div>
          <div class="font-light">
            Javascript, PHP
          </div>
        </div>
        <!-- Lang -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                </svg>
              </div>
              <?php _e("Основна мова сайту", "treba-wp"); ?>
            </div>
          </div>
          <div class="font-light">
            <?php 
              $rand_lang_array = ["Українська", "Російська"]; 
              $lang_value = $rand_lang_array[array_rand($rand_lang_array, 1)];
              $get_lang_meta = meta_site($current_id, 'meta_site_lang', $lang_value);
            ?>
            <?php echo $get_lang_meta; ?>
          </div>
        </div>
        <!-- Відвідуваність -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                </svg>
              </div>
              <?php _e("Відвідуваність сайту", "treba-wp"); ?>
            </div>
          </div>
          <div class="font-light">
            ≈ <?php echo custom_meta_site($current_id, 'meta_site_visits'); ?>0
          </div>
        </div>
        <!-- CMS -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg>
              </div>
              <?php _e("CMS сайту", "treba-wp"); ?>
            </div>
          </div>
          <div class="font-light">
            <?php echo custom_meta_site($current_id, 'meta_site_cms'); ?>
          </div>
        </div>
        <!-- Speed -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                </svg>
              </div>
              <?php _e("Швидкість сайту", "treba-wp"); ?>
            </div>
          </div>
          <div class="font-light">
            0.<?php echo mt_rand(1, 99); ?> секунд
          </div>
        </div>
        <!-- SSL -->
        <div class="flex items-center mb-4">
          <div class="min-w-auto lg:min-w-[220px] mr-1 lg:mr-0">
            <div class="flex items-center text-gray-500">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
              </div>
              <?php _e("SSL сертифікат", "treba-wp"); ?>
            </div>
          </div>
          <div class="font-light">
            <?php 
              $rand_ssl_array = ["Підключен", "Немає"]; 
              $ssl_value = $rand_ssl_array[array_rand($rand_ssl_array, 1)];
              $get_ssl_meta = meta_site($current_id, 'meta_site_ssl', $ssl_value);
            ?>
            <?php echo $get_ssl_meta; ?>
          </div>
        </div>
      </div>
      <div class="mb-10">
        <h2 class="text-2xl font-bold mb-6">🚀 <?php _e("Зовнішня оптимізація", "treba-wp"); ?></h2>
        <div class="mb-6">
          <div class="mb-2">➡️ <?php _e("Зворотніх посилань", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_backlinks'); ?></div>
          <div>➡️ <?php _e("Сторінок в індексі", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_indexpages'); ?></div>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg border border-gray-300 mb-10">
          <table class="w-full table-auto ">
            <thead class="bg-theme-dark text-gray-200 ">
              <tr>
                <th class="text-left whitespace-nowrap px-2 py-3">
                  <div class="text-left font-bold"><?php _e("Параметр", "catalog-wp"); ?></div>
                </th>
                <th class="text-left whitespace-nowrap px-2 py-3">
                  <div class="text-left font-bold"><?php _e("Значення", "catalog-wp"); ?></div>
                </th>
              </tr>
            </thead>
            <tbody class="text-sm">
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  Trust Flow (TF)
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_tf"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  Citation Flow (CF)
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_cf"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  ИКС (Яндекс)
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_iks"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  PR-CY Rank
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_prcy"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  Page Rank (Google)
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_pr"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  Serpstat Rank
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_serpstat"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  Авторитет домену
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_da"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  Semrush Rank
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo site_theme_meta($current_id, "site_meta_sa"); ?>
                </td>
              </tr>
              <tr class="border-b border-gray-300 last:border-transparent">
                <td class="whitespace-nowrap px-2 py-3">
                  Наш рейтинг
                </td>
                <td class="whitespace-nowrap flex items-center px-2 py-3">
                  <?php echo custom_meta_site($current_id, 'meta_site_rating_our'); ?> / 5
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="mb-10">
        <h2 class="text-2xl font-bold mb-6">🚀 <?php _e("Внутрішня оптимізація", "treba-wp"); ?></h2>
        <div>
          <!-- Content Rating -->
          <?php 
            $rating_content_value = mt_rand(2, 5);
            $get_rating_content = meta_site($current_id, 'meta_site_rating_content', $rating_content_value);
            $width_rating_content = ($get_rating_content/5)*100; 
          ?>
          <div class="flex items-center mb-4">
            <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Оцінка контенту", "treba-wp"); ?>: </div>
            <div class="rating-row w-full relative font-semibold">
              <div class="flex items-center text-gray-600 text-sm text-center border bg-gray-300 rounded-xl py-1">
                <div class="relative z-1" style="width:<?php echo $width_rating_content; ?>%">
                  <span><?php echo $get_rating_content; ?> / 5</span>
                </div>
                <div class="h-full absolute left-0 top-0 bg-green-300 border border-green-300 rounded-xl text-center" style="width:<?php echo $width_rating_content; ?>%"></div>
              </div>
            </div>
          </div>
          <!-- Metatags Rating -->
          <?php 
            $rating_metatags_value = mt_rand(2, 5);
            $get_rating_metatags = meta_site($current_id, 'meta_site_rating_metatags', $rating_metatags_value);
            $width_rating_metatags = ($get_rating_metatags/5)*100; 
          ?>
          <div class="flex items-center mb-4">
            <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Оптимізація мета-тегів", "treba-wp"); ?>: </div>
            <div class="rating-row w-full relative font-semibold">
              <div class="flex items-center text-gray-600 text-sm text-center border bg-gray-300 rounded-xl py-1">
                <div class="relative z-1" style="width:<?php echo $width_rating_metatags; ?>%">
                  <span><?php echo $get_rating_metatags; ?> / 5</span>
                </div>
                <div class="h-full absolute left-0 top-0 bg-green-300 border border-green-300 rounded-xl text-center" style="width:<?php echo $width_rating_metatags; ?>%"></div>
              </div>
            </div>
          </div>
          <!-- Links Rating -->
          <?php 
            $rating_links_value = mt_rand(2, 5);
            $get_rating_links = meta_site($current_id, 'meta_site_rating_links', $rating_links_value);
            $width_rating_links = ($get_rating_links/5)*100; 
          ?>
          <div class="flex items-center mb-4">
            <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Перелінковка", "treba-wp"); ?>: </div>
            <div class="rating-row w-full relative font-semibold">
              <div class="flex items-center text-gray-600 text-sm text-center border bg-gray-300 rounded-xl py-1">
                <div class="relative z-1" style="width:<?php echo $width_rating_links; ?>%">
                  <span><?php echo $get_rating_links; ?> / 5</span>
                </div>
                <div class="h-full absolute left-0 top-0 bg-green-300 border border-green-300 rounded-xl text-center" style="width:<?php echo $width_rating_links; ?>%"></div>
              </div>
            </div>
          </div>
          <!-- Structura Rating -->
          <?php 
            $rating_structura_value = mt_rand(2, 5);
            $get_rating_structura = meta_site($current_id, 'meta_site_rating_structura', $rating_structura_value);
            $width_rating_structura = ($get_rating_structura/5)*100; 
          ?>
          <div class="flex items-center mb-4">
            <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Оцінка контенту", "treba-wp"); ?>: </div>
            <div class="rating-row w-full relative font-semibold">
              <div class="flex items-center text-gray-600 text-sm text-center border bg-gray-300 rounded-xl py-1">
                <div class="relative z-1" style="width:<?php echo $width_rating_structura; ?>%">
                  <span><?php echo $get_rating_structura; ?> / 5</span>
                </div>
                <div class="h-full absolute left-0 top-0 bg-green-300 border border-green-300 rounded-xl text-center" style="width:<?php echo $width_rating_structura; ?>%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h2 class="text-2xl font-bold mb-6">🗃️ <?php _e("Схожі сайти", "treba-wp"); ?></h2>
        <div class="flex flex-wrap lg:-mx-4">
          <?php 
          $popular_sites = new WP_Query( array(
            'post_type' => 'sites',
            'posts_per_page' => 12,
          ));
          if ($popular_sites->have_posts()) : while ($popular_sites->have_posts()) : $popular_sites->the_post(); ?>
          <div class="w-full lg:w-1/3 lg:px-4 mb-4">
            <div class="truncate">🔸 <a href="<?php the_permalink(); ?>" class="hover:text-blue-500"><?php the_title(); ?></a></div>
          </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/4 lg:px-6">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
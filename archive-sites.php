<?php get_header(); ?>

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
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 font-light px-4">
          <span itemprop="name"><?php _e( 'Каталог сайтів', 'treba-wp' ); ?></span>
          <meta itemprop="position" content="2" />
        </li>
      </ul>
    </div>
    <!-- end breadcrumbs -->
    <h1 class="text-3xl font-bold mb-6"><?php _e("Всі сайти в каталозі", "treba-wp"); ?></h1>
    <div class="flex items-center text-sm opacity-75">
      <div class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
      <?php _e("Знайдено сайтів", "treba-wp"); ?>: <?php $count_sites = wp_count_posts('sites'); echo $count_sites->publish; ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="flex flex-wrap lg:-mx-6 mb-10">
    <div class="w-full lg:w-3/4 lg:px-6 mb-10">
      <div class="overflow-x-auto bg-white rounded-lg border border-gray-300 mb-10">
        <table class="w-full table-auto ">
          <thead class="bg-theme-dark text-gray-200 ">
            <tr>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold">🔗 <?php _e("Сайт", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold">⭐ <?php _e("Оцінка", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold">⚙️ <?php _e("CMS", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold">💰<?php _e("Вартість", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold">🗓️ <?php _e("Оновлено", "catalog-wp"); ?></div>
              </th>
            </tr>
          </thead>
          <tbody class="text-sm">
            <?php 
            global $wp_query, $wp_rewrite;  
            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
            $all_sites = new WP_Query( array(
              'post_type' => 'sites',
              'posts_per_page' => 30,
              'orderby' => 'date',
              'paged' => $current, 
            ));
            if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
              <?php get_template_part('template-parts/site-item-table'); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </tbody>
        </table>
      </div>
      <div class="b_pagination text-center mb-12">
        <?php 
          $big = 9999999991; // уникальное число
          echo paginate_links( array(
            'format' => '?paged=%#%',
            'total' => $all_sites->max_num_pages,
            'current' => $current,
            'prev_next' => true,
            'next_text' => (''),
            'prev_text' => (''),
          )); 
        ?>
      </div>
    </div>
    <div class="w-full lg:w-1/4 lg:px-6">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
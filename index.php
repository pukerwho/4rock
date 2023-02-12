<?php get_header(); ?>

<div class="bg-zinc-800 text-gray-200 py-16 mb-10">
  <div class="container">
    <div class="flex flex-col items-center">
      <h1 class="text-4xl font-bold uppercase mb-6">🔍 <?php _e("SEO-аналіз сайтів", "treba-wp"); ?></h1>
      <div class="text-lg font-light opacity-75 mb-12"><?php _e("Перевірка сайтів для SEO-фахівців. Дізнайтесь більше про свій сайт!", "treba-wp"); ?></div>
      <div>
        <a href="/add" class="bg-indigo-600 hover:bg-indigo-700 text-lg rounded-lg px-6 py-4"><?php _e("Перевірити сайт", "treba-wp"); ?></a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2 class="text-3xl font-bold mb-6">📒 <?php _e("Наші категорії", "treba-wp"); ?></h2>
  <?php 
  $all_sites = new WP_Query( array(
    'post_type' => 'sites',
    'posts_per_page' => 10,
    'orderby' => 'rand',
  ));
  ?>
  <div class="flex flex-wrap lg:-mx-4 mb-10">
    <div class="w-full lg:w-1/3 lg:px-4 mb-6 lg:mb-0 last-of-type:mb-0">
      <div class="bg-violet-50 rounded-lg p-4">
        <div class="inline-flex text-lg font-bold bg-violet-200 rounded-xl px-4 py-1 mb-4">🔥 <?php _e("Популярні сайти", "treba-wp"); ?></div>
        <?php if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
          <?php $current_id = get_the_ID(); ?>
          <div class="bg-white shadow-lg rounded-lg p-3 mb-3 last-of-type:mb-0">
            <div class="truncate font-extrabold mb-4">🔗 <?php the_title(); ?></div>
            <div class="mb-2">⭐ <?php _e("Оцінка сайту", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_rating_our'); ?> / 5</div>
            <div class="mb-4">💰 <?php _e("Вартість сайту", "treba-wp"); ?>: ≈ <?php echo custom_meta_site($current_id, 'meta_site_price'); ?>00$</div>
            <div class="inline-block bg-red-100 rounded-xl px-3 py-1 mb-4"><?php _e("Помилок на сайті", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_error'); ?></div>
            <div><a href="<?php the_permalink(); ?>" class="text-zinc-800 font-bold underline"><?php _e("Докладніше", "treba-wp"); ?></a></div>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?> 
      </div>
    </div>
    <div class="w-full lg:w-1/3 lg:px-4 mb-6 lg:mb-0 last-of-type:mb-0">
      <div class="bg-green-50 rounded-lg p-4">
        <div class="inline-flex text-lg font-bold bg-green-200 rounded-xl px-4 py-1 mb-4">✔️ <?php _e("Нещодавно перевірені", "treba-wp"); ?></div>
        <?php if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
          <?php $current_id = get_the_ID(); ?>
          <div class="bg-white shadow-lg rounded-lg p-3 mb-3 last-of-type:mb-0">
            <div class="truncate font-extrabold mb-4">🔗 <?php the_title(); ?></div>
            <div class="mb-2">⭐ <?php _e("Оцінка сайту", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_rating_our'); ?> / 5</div>
            <div class="mb-4">💰 <?php _e("Вартість сайту", "treba-wp"); ?>: ≈ <?php echo custom_meta_site($current_id, 'meta_site_price'); ?>00$</div>
            <div class="inline-block bg-red-100 rounded-xl px-3 py-1 mb-4"><?php _e("Помилок на сайті", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_error'); ?></div>
            <div><a href="<?php the_permalink(); ?>" class="text-zinc-800 font-bold underline"><?php _e("Докладніше", "treba-wp"); ?></a></div>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?> 
      </div>
    </div>
    <div class="w-full lg:w-1/3 lg:px-4 mb-6 lg:mb-0 last-of-type:mb-0">
      <div class="bg-yellow-50 rounded-lg p-4">
        <div class="inline-flex text-lg font-bold bg-yellow-200 rounded-xl px-4 py-1 mb-4">👍🏻 <?php _e("Наш вибір", "treba-wp"); ?></div>
        <?php if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
          <?php $current_id = get_the_ID(); ?>
          <div class="bg-white shadow-lg rounded-lg p-3 mb-3 last-of-type:mb-0">
            <div class="truncate font-extrabold mb-4">🔗 <?php the_title(); ?></div>
            <div class="mb-2">⭐ <?php _e("Оцінка сайту", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_rating_our'); ?> / 5</div>
            <div class="mb-4">💰 <?php _e("Вартість сайту", "treba-wp"); ?>: ≈ <?php echo custom_meta_site($current_id, 'meta_site_price'); ?>00$</div>
            <div class="inline-block bg-red-100 rounded-xl px-3 py-1 mb-4"><?php _e("Помилок на сайті", "treba-wp"); ?>: <?php echo custom_meta_site($current_id, 'meta_site_error'); ?></div>
            <div><a href="<?php the_permalink(); ?>" class="text-zinc-800 font-bold underline"><?php _e("Докладніше", "treba-wp"); ?></a></div>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?> 
      </div>
    </div>
  </div>

  <div class="flex flex-wrap lg:-mx-6 mb-10">
    <div class="w-full lg:w-3/4 lg:px-6">
      <h2 class="text-3xl font-bold mb-6">🗂 <?php _e("Каталог сайтів", "treba-wp"); ?></h2>
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
              $popular_places_query = new WP_Query( array(
                'post_type' => 'sites',
                'posts_per_page' => 15,
                'orderby' => 'rand',
              ));
              if ($popular_places_query->have_posts()) : while ($popular_places_query->have_posts()) : $popular_places_query->the_post(); ?>
                <?php get_template_part('template-parts/site-item-table'); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="w-full lg:w-1/4 lg:px-6">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
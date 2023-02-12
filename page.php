<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="bg-zinc-800 text-gray-200 py-16 mb-10">
  <div class="container">
    <h1 class="text-3xl font-bold"><?php the_title(); ?></h1>
  </div>
</div>

<div class="container">
  <div class="flex flex-wrap lg:-mx-6 mb-10">
    <div class="w-full lg:w-3/4 lg:px-6 mb-10">
      <div class="content bg-blue-50 rounded-lg p-4">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="w-full lg:w-1/4 lg:px-6">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
<?php $current_id = get_the_ID(); ?>

<!-- Row -->
<tr class="border-b border-gray-300 last:border-transparent">
  <td class="whitespace-nowrap px-2 py-3">
    <div class="hover:text-blue-500"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  </td>
  <td class="whitespace-nowrap flex items-center px-2 py-3">
    <?php echo custom_meta_site($current_id, 'meta_site_rating_our'); ?> / 5
  </td>
  <td class="max-w-xs whitespace-nowrap overflow-hidden px-2 py-3">
    <?php echo custom_meta_site($current_id, 'meta_site_cms'); ?>
  </td>
  <td class="whitespace-nowrap px-2 py-3">
    ≈ <?php echo custom_meta_site($current_id, 'meta_site_price'); ?>00$
  </td>
  <td class="text-gray-500 whitespace-nowrap flex items-center px-2 py-3">
    <?php echo get_the_modified_time('j.n.Y'); ?>
  </td>
</tr>

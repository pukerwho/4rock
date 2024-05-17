</div>

<footer class="bg-zinc-800 text-gray-200 py-10">
  <div class="container">
    <div class="flex flex-col items-center">
      <a href="<?php echo home_url(); ?>" class="bg-indigo-600 rounded-lg text-gray-200 text-xl px-3 py-1 mb-6">
        🤘 blog <span class="text-yellow-400"> for</span> rock
      </a>
      <div class="mb-6">
        © 2024. <?php _e("Всі права збережені", "treba-wp"); ?>
      </div>
      <div>
        <a href="https://sviato.top/"><img src="https://blog4rock.com/wp-content/uploads/2024/05/sviato.jpeg" alt="Sviato.top" width="25"></a>
      </div>
    </div>
  </div>
</footer>

<div class="modal-bg hidden"></div>

<div class="modal" data-modal="menu">
  <div class="modal_content w-full h-screen">
    <div class="h-full bg-white rounded-xl">
      <div class="flex items-center justify-between bg-theme-dark text-white text-lg rounded-t-lg px-4 py-6 mb-4">
        <div class="logo font-extrabold">
          <a href="<?php echo get_home_url(); ?>"><span class="text-blue-500">n</span><span class="text-yellow-400">Ukraine</span></a>
        </div>
        <div class="modal-close-js">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
      <div class="p-4">
        <div class="text-2xl font-title mb-6"><?php _e("Меню", "treba-wp"); ?></div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'div',
            'menu_class' => 'flex flex-col'
          ]); ?> 
        </div>
      </div>
    </div>
  </div>  
</div>

<?php wp_footer(); ?>

</body>
</html>
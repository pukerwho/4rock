<div class="lg:sticky lg:top-4 bg-gray-100 rounded-lg p-5">
  <div class="text-center text-xl text-gray-600 font-bold mb-4"><?php _e("Доступні CMS", "treba-wp"); ?></div>
  <ul class="border-b border-gray-300 mb-4 pb-4">
    <li class="mb-2"><a href="/wordpress" class="text-gray-600 hover:text-blue-500">⚙️ WordPress</a></li>
    <li class="mb-2"><a href="/joomla" class="text-gray-600 hover:text-blue-500">⚙️ Joomla</a></li>
    <li class="mb-2"><a href="/prestashop" class="text-gray-600 hover:text-blue-500">⚙️ Prestashop</a></li>
    <li class="mb-2"><a href="/opencart" class="text-gray-600 hover:text-blue-500">⚙️ OpenCart</a></li>
    <li class="mb-2"><a href="/horoshop" class="text-gray-600 hover:text-blue-500">⚙️ Хорошоп</a></li>
    <li class="mb-2"><a href="/prom" class="text-gray-600 hover:text-blue-500">⚙️ Prom</a></li>
    <li class="mb-2"><a href="/tilda" class="text-gray-600 hover:text-blue-500">⚙️ Tilda</a></li>
    <li><a href="/custom" class="text-gray-600 hover:text-blue-500">⚙️ Самописна</a></li>
  </ul>
  <div class="text-center text-xl text-gray-600 font-bold mb-4"><?php _e("Категорії", "treba-wp"); ?></div>
  <ul class="border-b border-gray-300 mb-4 pb-4">
    <li class="mb-2"><a href="/popular" class="text-gray-600 hover:text-blue-500">📌 <?php _e("Популярні сайти", "treba-wp"); ?></a></li>
    <li class="mb-2"><a href="/rating" class="text-gray-600 hover:text-blue-500">📌 <?php _e("Сайти з високою оцінкою", "treba-wp"); ?></a></li>
    <li class="mb-2"><a href="/expensive" class="text-gray-600 hover:text-blue-500">📌 <?php _e("Дорогі сайти", "treba-wp"); ?></a></li>
    <li class="mb-2"><a href="/intresting" class="text-gray-600 hover:text-blue-500">📌 <?php _e("Цікаві сайти", "treba-wp"); ?></a></li>
    <li><a href="/our" class="text-gray-600 hover:text-blue-500">📌 <?php _e("Наш вибір", "treba-wp"); ?></a></li>
  </ul>
  <div class="text-center text-xl text-gray-600 font-bold mb-4"><?php _e("Цікаві статті", "treba-wp"); ?></div>
  <div class="flex items-center border-b border-gray-300 mb-4 pb-4">
    <div class="mr-2">
      <img src="https://blog4rock.com/wp-content/uploads/2023/04/videonabljudenija.jpeg" class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" loading="lazy" alt="Видеонаблюдение в частном доме">
    </div>
    <div><a href="https://icatalog.pro/12670-vazhnost-roli-videonabljudenija/" class="font-light text-gray-600 hover:text-blue-500">О важности роли видеонаблюдения</a></div>
  </div>
  <div class="text-center text-xl text-gray-600 font-bold mb-4"><?php _e("Зараз шукають", "treba-wp"); ?></div>
  <ul>
    <?php if ( is_home() ): ?>
      <li class="mb-2"><a href="https://webgolovolomki.com/" class="text-gray-600 hover:text-blue-500">🖇️ WEB Головоломки</a></li>
      <li class="mb-2"><a href="https://priazovka.com/" class="text-gray-600 hover:text-blue-500">🖇️ Приазовская правда</a></li>
      <li class="mb-2"><a href="https://sdamkvartiry.com/" class="text-gray-600 hover:text-blue-500">🖇️ Сдам Квартиру</a></li>
      <li class="mb-2"><a href="https://s-cast.ua/" class="text-gray-600 hover:text-blue-500">🖇️ S-cast</a></li>
      <li class="mb-2"><a href="https://auto-future.land/" class="text-gray-600 hover:text-blue-500">🖇️ Автомобили Будущего</a></li>
      <li class="mb-2"><a href="https://tarakan.org.ua/" class="text-gray-600 hover:text-blue-500">🖇️ Tarakan</a></li>
      <li class="mb-2"><a href="https://treba-solutions.com/" class="text-gray-600 hover:text-blue-500">🖇️ Treba Solutions</a></li>
      <li><a href="https://d-art.org.ua/" class="text-gray-600 hover:text-blue-500">🖇️ D-ART</a></li>
    <?php else: ?>
      <?php 
        $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $super_links = super_links($current_url);
        foreach ($super_links as $super_link):
      ?>
      <li class="mb-2 text-gray-600 hover:text-blue-500">
        <?php echo $super_link->top_links; ?>
      </li>
      <?php endforeach; ?>
    <?php endif; ?>  
  </ul>
</div>
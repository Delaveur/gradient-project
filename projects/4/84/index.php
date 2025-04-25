<?php
$page_title = "Загородный дом для молодой семьи.";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_340px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1 md:mt-[-72px]">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Загородный дом для молодой семьи.</h1>
        <div class="text-lg text-gray-500">
        </div>
      </div>

      <!-- Галерея -->
      <div class="relative mb-4">
        <img id="main-image" class="w-full h-[479px] object-cover rounded-lg cursor-pointer"
          onclick="openModal(currentIndex)">
        <!-- Кнопки навигации -->
        <button class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white backdrop-blur-sm p-2.5 rounded-full shadow-lg transition-all hover:scale-110 active:scale-95"
          onclick="changeSlide(-1)">
          <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white backdrop-blur-sm p-2.5 rounded-full shadow-lg transition-all hover:scale-110 active:scale-95"
          onclick="changeSlide(1)">
          <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>

      <!-- Превью галереи -->
      <div id="thumbnail-container" class="flex snap-x snap-mandatory scroll-pl-4 gap-2 overflow-x-auto pb-4">
        <!-- Миниатюры -->
      </div>
    </div>

    <!-- Правая колонка (текст) -->
    <div class="lg:order-2 lg:h-[calc(100vh-400px)] lg:sticky lg:top-8 lg:overflow-y-auto custom-scrollbar">
      <div class="prose max-w-none lg:pr-4">
        <div class="space-y-4 text-gray-600">
          <p>Интерьер получится домашний и уютный - молодая хозяйка дома увлекается созданием украшений, ей особенно близки интерьеры Прованса с летними и солнечными цветами. Семья много путешествует, и множество мелочей, найденных на рынках Франции: картины, вазы, ткани сундуки, шкатулки - ничего не бывает лишним в создании истории. История семьи, которая будет восприниматься как волшебная сказка у огня в уютной гостиной. </p>

          <p>Типичная черта стиля прованс &ndash; состаренность поверхностей и вещей: деревянный пол с трещинками, потёртая терракотовая плитка, выложенная неровно, чуть облупившиеся мебельные фасады, выгоревшие на солнце поверхности. </p>

          <p>Расположение помещений в доме следует классической планировке французских домов. </p>

          <p>На первом этаже находятся основные пространства для традиционного семейного общения. Светлая гостиная с био-камином и библиотекой. Большая кухня, расположенная совместно с обеденной зоной, центром которой является большой стол на 10 персон. Там же расположена небольшая веранда для завтраков, выходящая в сад. </p>

          <p>Второй этаж практически весь отдан детям. </p>

          <p>У мальчиков отдельные комнаты, для сна и занятий. Но для развлечения и приёма друзей, родители решили сделать отдельное пространство: в существующем объеме здания было сделано перекрытие, и организована дополнительная большая игровая комната с любимыми детскими развлечениями. Стены, пол и потолок дополнительно защищены звукоизолирующими материалами. </p>

          <p>На третьем этаже находится спальня родителей, с отдельными большими гардеробными комнатами. Ванная комната имеет большие светлые окна, придающие помещению стилистику прованских частных имений. </p>

          <p>Почти все комнаты выполнены в едином стиле, исключением стала мансарда. Существующую крышу дома немного приподняли, чтобы устроить небольшую гостиную в восточной стилистике. В ней, снежными вечерами на больших лежанках в окружении ярких цветов комнаты, можно оказаться в тёплых странах, и наслаждаться чаем со сладостями. </p>

          <p>В историческом прованском доме, как правило, вырастает не одно поколение семьи. Прованский дом – это дом со своей богатой историей, в нём много старинных памятных вещей, к которым относятся бережно и с любовью. Создавая интерьер мы создали пространство, и создали пространство для интересной семейной истории. </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Модальное окно -->
<div id="modal" class="fixed inset-0 bg-black/90 hidden z-50 cursor-zoom-out [&>*]:pointer-events-none [&_img]:pointer-events-auto [&_button]:pointer-events-auto" onclick="handleModalClick(event)">
  <div class="relative w-full h-full flex items-center justify-center">
    <img id="modal-image" class="max-w-full max-h-full cursor-default">
    <button class="absolute top-4 right-4 text-white text-4xl" onclick="closeModal()">×</button>
    <button class="absolute left-4 top-1/2 text-white text-4xl transform -translate-y-1/2"
      onclick="changeModalSlide(-1)">←</button>
    <button class="absolute right-4 top-1/2 text-white text-4xl transform -translate-y-1/2"
      onclick="changeModalSlide(1)">→</button>
  </div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>
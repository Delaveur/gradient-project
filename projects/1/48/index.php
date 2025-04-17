<?php
$page_title = "ТРЦ Удачи";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_280px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">ТРЦ Соловьи Плаза</h1>
        <div class="text-lg text-gray-500">2014 Россия, Московская область, Наро-Фоминский район</div>
      </div>

      <!-- Галерея -->
      <div class="relative mb-4">
        <img id="main-image" class="w-full h-96 object-cover rounded-lg cursor-pointer"
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
    <div class="lg:order-2 lg:h-[calc(100vh-300px)] lg:sticky lg:top-8 lg:overflow-y-auto custom-scrollbar">
      <div class="prose max-w-none lg:pr-4">
        <div class="space-y-4 text-gray-600">

          <p align="justify">Общая площадь проектирования 102 000 м.кв.&nbsp;
            <br />
            Стадия Проект (все разделы согласно постановлению # 87 )
          </p>

          <p align="justify"> Площадка строительства торгово-развлекательного центра расположена в Наро-Фоминском районе Московской области, прилегает к Киевскому шоссе.</p>

          <p align="justify"> В основу архитектурно - планировочных решений была положена органическая интеграция объекта в имеющийся природный ландшафт, а так же его приоритетное значение структуре района.</p>

          <p align="justify"> Объект имеет исключительное расположение  и будет  нацелен на жителей г. Наро-Фоминск, Такое местоположение Торгово-развлекательного центра не только даст экономический эффект при его эксплуатации, но и повысит уровень жизни, как для жителей района, так и для транзитных пассажиров.</p>

          <p align="justify"> Здание включает в себя два наземных этажа. Высота здания в максимальной точке 18 м.&nbsp;</p>

          <p align="justify"> Архитектурно - планировочное решение здания предусматривает создание двух многофункциональных объёмов, связанных между собой галерей, общая площадь здания 102 000 м.кв.</p>

          <p align="justify"> В здании торгово-развлекательного центра размещаются гипермаркет &laquo;Лента&raquo;, гипермаркет электронных товаров «Медиа Маркт», магазины промышленных товаров,&nbsp;
            <br />
            Здание торгово-развлекательного центра - двухэтажная торговая галерея - включает в себя помещения: одно или двух этажные магазины одежды, обуви и сопутствующих товаров, гипермаркет электроники и бытовой техники.&nbsp;
          </p>

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
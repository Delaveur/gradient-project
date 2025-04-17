<?php
$page_title = "ТЦ Новоарбатский";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_280px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">ТЦ Новоарбатский</h1>
        <div class="text-lg text-gray-500">2011 Россия, Москва</div>
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

          <p align="justify"> Общая площадь объекта реконструкции 19 750 м.кв.
            <br />

            <br />
            Получено положительное заключение  МОСКОМЭКСПЕРТИЗЫ
            <br />
            Разработка стадии РД
          </p>

          <p align="justify">Проектом предусматривается реконструкция Торгового центра &laquo;Новоарбатский&raquo;, расположенного по улице Новый Арбат, дом 11, строение1. Расположенного в стилобатной части высотного здания, входящего в архитектурный комплекс «домов-книжек» по ул. Новый Арбат. </p>

          <p align="justify">Встроено-пристроенный объем и состоит из 2-х надземных этажей и 2-х подземных. (-1) подземный этаж имеет выходы на уровень земли со стороны дворового фасада, что обусловлено особенностями рельефа участка. Здание разделено на 2 части помещениями делового центра, к которому оно примыкает. Входы из одной части в другую предусмотрены в уровне (-1) подземного этажа
            <br />
            Проектом предусматриваются минимальные изменения в архитектурный облик комплекса.
            <br />
            Длина фасада по улице Новый Арбат составляет 132 метра. Линейный блок магазинов с рекламной полосой, решенной в едином формате для всех брендов,  прозрачное большеформатное остекление даёт возможность размещать витринные инсталляции. Основные входы в здание обозначены световыми панелями, которые не разрывают архитектурную композицию, в то же время указывают направления основных входов в здание.
          </p>

          <p align="justify">На (-2) подземного этаже расположен крупный продовольственный магазин, два непродовольственных, а также приемный пункт химчистки, складские помещения, технические и подсобные помещения, а также помещения загрузки непродовольственных магазинов, ресторана и кафе из подземного транспортного туннеля расположенного на отм. &ndash; 9.600 под пешеходным тротуаром.
            <br />
            Помещения (-1) подземного этажа занимают непродовольственные магазины, кафе, помещения службы эксплуатации и охраны, технические и вспомогательные помещения.
            <br />
            На (1) и (2) надземных этажах расположенные основные торговые площади, а так же ресторан и банк. Все надземные помещения, за исключением одного, имеют непосредственный выход на ул. Новый Арбат. Большинство этих помещений – двухуровневые. Вертикальными связями уровней являются лестницы или эскалаторы.
            <br />
            Для вертикальной связи этих уровней предусмотрены эскалаторы и 2 пассажирских панорамных лифта с функцией перевозки МГН.
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
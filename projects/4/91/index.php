<?php
$page_title = "ЖК Андерсен";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_340px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1 md:mt-[-72px]">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">ЖК Андерсен</h1>
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
          <p>ПРОЕКТ ЗАСТРОЙКИ ЧАСТИ ТЕРРИТОРИИ ПОСЁЛКА &quot;АНДЕРСЕН&quot;  В  МОСКОВСКОЙ ОБЛАСТИ </p>
          <p><strong>&nbsp;</strong></p>
          <p><strong>ПРЕДПРОЕКТНОЕ ПРЕДЛОЖЕНИЕ СТРОИТЕЛЬСТВА ЖИЛОГО КОМПЛЕКСА СО ВСТРОЕННЫМИ </strong><strong> </strong><strong>ПОМЕЩЕНИЯМИ ОБЩЕСТВЕННОГО НАЗНАЧЕНИЯ</strong><strong> </strong><br>
            <strong>по адресу:  Московская область, Ленинский </strong><strong> </strong><strong>муниципальный район, с.п. Десеновское в районе </strong><strong> </strong><br>
            <strong>деревни Десна. поселок &quot;АНДЕРСЕН&quot;</strong><strong> </strong>
          </p>
          <p>Архитектурная Концепция предусматривает устройство одного жилого корпуса. <br>
            Здание находиться на одном из въездов на территорию посёлка, и является высотной доминантой застройки.<br>
            Входы в вертикальные коммуникационные зоны жилой части расположены со стороны двора с уровней «1». Входы в общественные помещения, ориентированные на посёлок, расположены со стороны прилегающей улицы.<br>
            Первый этаж, а именно уровень «1» запроектирован нежилым, в нём располагаются помещения обслуживающих организаций квартала, торговые помещения и кафетерий. <br>
            Квартиры запроектированы согласно Техническому Заданию. На эксплуатируемой кровле расположена крышная газовая котельная и техническое оборудование. Фасад здания запроектирован с отделкой из клинкерной плитки, согласно общей концепции посёлка.<br>
            На участке расположена наземная парковка на 34 машино-места. Со стороны входа в жилую часть здания, расположена зона тихого отдыха. Круговой проезд для пожарных машин, расположен в границах участка, в торцах здания выполнены арки для проезда машины.</p>
          <p><strong>&nbsp;</strong></p>
          <p><strong>ТЕХНИКО-ЭКОНОМИЧЕСКИЕ ПОКАЗАТЕЛИ ПО УЧАСТКУ</strong></p>
          <p>Площадь застройки:   1364 м.кв</p>
          <p>&nbsp;</p>
          <p>ТЕХНИКО-ЭКОНОМИЧЕСКИЕ ПОКАЗАТЕЛИ ПО ЗДАНИЮ</p>
          <p>Этажность здания: 8  эт.</p>
          <p>Общая площадь: 9998 м&#178; </p>
          <p> в т.ч квартиры   7345.8 м&#178;</p>
          <p> из них балконы 102.2 м&#178;</p>
          <p> арендуемые нежилые помещения  925 м&#178;</p>
          <p> холлы, лестницы 743.1 м&#178;</p>
          <p> газовая крышная котельная  40 м&#178;</p>
          <p> эксплуатируемая кровля  51 м&#178;  <br>
          </p>
          <p>&nbsp;</p>
          <p>Общее количество квартир: 147 шт.</p>
          <p> 1-комн. квартир  667.4 м&#178; ( 16 шт.)<br>
            <br>
            2-комн. квартир  288.7 м&#178; ( 4 шт.)<br>
            <br>
            3-комн. квартир   93.3 м&#178; ( 1 шт.)<br>
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
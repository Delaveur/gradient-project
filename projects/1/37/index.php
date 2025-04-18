<?php
$page_title = "ТРК г.Ульяновск";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_340px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1 md:mt-[-72px]">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">ТРК г.Ульяновск</h1>
        <div class="text-lg text-gray-500">2012 Россия, г. Ульяновск</div>
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

          <p align="justify">Общая площадь проектирования 17 000 м.кв.
            <br />
            Архитектурно-градостроительное решение / АГР
            <br />
            Подготовка задания на архитектурное проектирование
          </p>

          <p align="justify">Совместно с консалтинговым агентством &laquo;FH Development&raquo; была разработана концепция объекта, совмещающая административную, развлекательную и торговую функции.</p>

          <p align="justify">Участок для проектирования торгового-развлекательного центра расположен на улице Карла Маркса, города рядом со стадионом «Труд». </p>

          <p align="justify">Небольшой по размеру торговый центр, расположен в центральной части города, и несет административно - развлекательный характер. 
            <br />
            По заданию требовалось совместить коммерческую и административную функцию в едином объёме.
            <br />
            Участок имеет естественный рельеф, с сильном уклоном  сторону стадиона. За счёт этого появилась возможность расположить на верхних этажах, выходящих на улицу - торгово-развлекательную функцию, уровнями ниже, располагается парковка для посетителей центра, и болельщиков во время проведения матчей. На уровне стадиона находится вход в помещения для спортсменов и тренерского состава. 
          </p>

          <p align="justify">На верхнем этаже расположен  ресторан, спорт-бар, и «фуд-корд». Витражное остекление выходит на стадион и позволяет смотреть матчи в комфортных условиях.</p>

          <p align="justify">Основной вход в здание расположен со стороны улицы Карла Макса, на первом этаже преимущественно находятся небольшие кафе, и магазины в которые можно попасть как с улицы, так и с галереи торгового центра. </p>

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
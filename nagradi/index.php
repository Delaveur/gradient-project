<?php
$page_title = "Награды";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="pr-2 pl-2 text-justify hyphens-auto">
  <section>
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/01.jpg" onclick="openModal(0)">
          <div>
            <p class="mb-1">Серебряный диплом</p>
            <p>ЗОЛОТАЯ КАПИТЕЛЬ 2015</p>
            <p>За работу: <span class="text-gray-600 font-semibold">Деловой центр «ДВИЖЕНИЕ В КВАДРАТАХ»</span></p>
            <p>Номинация: <span class="text-gray-600 font-semibold">Общественные здания | Концепции</span></p>
          </div>
        </div>

        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/02.jpg" onclick="openModal(1)">
          <div>
            <p class="mb-1">Серебряный диплом</p>
            <p>ЗОЛОТАЯ КАПИТЕЛЬ 2015</p>
            <p>За работу: <span class="text-gray-600 font-semibold">Объект культурного наследия федерального значения «Каретный сарай» на территории «Измайлово», Москва</span></p>
            <p>Номинация: <span class="text-gray-600 font-semibold">Реставрация и реконструкция зданий и сооружений | Проекты</span></p>
          </div>
        </div>

        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/03.jpg" onclick="openModal(2)">
          <div>
            <p class="mb-1">Серебряный диплом</p>
            <p>ЗОЛОТАЯ КАПИТЕЛЬ 2015</p>
            <p>За работу: <span class="text-gray-600 font-semibold">Бизнес-центр «ДУБРОВСКИЙ»</span></p>
            <p>Номинация: <span class="text-gray-600 font-semibold">Общественные здания | Постройки</span></p>
          </div>
        </div>

        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/04.jpg" onclick="openModal(3)">
          <div>
            <p class="mb-1">Диплом участника</p>
            <p>ЗОЛОТАЯ КАПИТЕЛЬ 2015</p>
            <p>За работу: <span class="text-gray-600 font-semibold">Интерьер индивидуального жилого дома по ул. Нежинская в Москве</span></p>
            <p>Номинация: <span class="text-gray-600 font-semibold">Интерьеры жилые | Проекты</span></p>
          </div>
        </div>

        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/05.jpg" onclick="openModal(4)">
          <div>
            <p class="mb-1">Диплом участника</p>
            <p>Фестиваль XXII Международный фестиваль ЗОДЧЕСТВО 2014, <span class="text-gray-600 font-semibold">смотр-конкурс «Архитектурные произведения 2012-2014 гг. Проекты»</span></p>
          </div>
        </div>

        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/06.jpg" onclick="openModal(5)">
          <div>
            <p class="mb-1">Диплом участника</p>
            <p>Фестиваль ЗЕЛЕНЫЙ ПРОЕКТ 2014, <span class="text-gray-600 font-semibold">смотр-конкурс «Экоустойчивая среда обитания»</span></p>
          </div>
        </div>

        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/07.jpg" onclick="openModal(6)">
          <div>
            <p class="mb-1">Лауреат в номинации <span class="text-gray-600 font-semibold">"Административные здания и сооружения"</span></p>
            <p>Фестиваль БЕЛАЯ БАШНЯ, <span class="text-gray-600 font-semibold">конкурс «ПРОЕКТЫ ЗДАНИЙ И СООРУЖЕНИЙ 2012–2013»</span></p>
          </div>
        </div>

        <div class="flex items-center space-x-[20px]">
          <img class="h-[105px] border border-black cursor-pointer" src="/images/nagradi/08.jpg" onclick="openModal(7)">
          <div>
            <p class="mb-1">Диплом участника</p>
            <p>Фестиваль ЗЕЛЕНЫЙ ПРОЕКТ 2013, <span class="text-gray-600 font-semibold">смотр-конкурс «Экоустойчивая среда обитания»</span></p>
          </div>
        </div>

      </div>
    </div>
  </section>


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
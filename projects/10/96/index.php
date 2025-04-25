<?php
$page_title = "Каретный сарай на территории «Измайлово»";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_340px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1 md:mt-[-72px]">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Каретный сарай на территории «Измайлово»</h1>
        <div class="text-lg text-gray-500">Объект культурного наследия федерального значения каретный сарай на территории «Измайлово».
          Москва, ВАО, городок им. Баумана, д.2 стр.9.
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
          <p>ПРОЕКТ РЕМОНТНО-РЕСТАВРАЦИОННЫХ РАБОТ С ПРИСПОСОБЛЕНИЕМ ПОД СОВРЕМЕННОЕ ИСПОЛЬЗОВАНИЕ. КИНОКОНЦЕРТНЫЙ ЗАЛ С ВЫСТАВОЧНЫМИ ПОМЕЩЕНИЯМИ.
            <br />
            Независимый национальный архитектурный рейтинг &laquo;Золотая капитель&raquo; 2015 г.
            <br />
            серебряный диплом
            <br />
            РЕСТАВРАЦИЯ И РЕКОНСТРУКЦИЯ
            <br />
            ЗДАНИЙ И СООРУЖЕНИЙ | ПРОЕКТЫ
            <br />
          </p>

          <p> </p>

          <p> Рукотворный Измайловский (Серебряный) остров, окружен искусственным Серебряным и Виноградными прудами был образован в 60-е гг. XVII века по приказу Алексея Михайловича Романова. В центре острова расположилась царская усадьба, в которой был выстроен величественный архитектурный ансамбль, включавший пятиглавый Покровский собор, многопролетный каменный мост с Мостовой башней и Государев двор. </p>

          <p>Целью проекта реставрации является максимально возможное восстановление исторического облика памятника с учетом поздних наслоений, развивающих его объемно-пространственную композицию и исторически сложившуюся функцию, удаление современных дисгармонирующих конструктивных, архитектурных и декоративных элементов, воссоздание наиболее существенных для стилистической цельности памятника частей и деталей. Кроме этого, в проекте реставрации предполагается необходимость разработки проекта приспособления памятника к современным нуждам. </p>

          <p>Все работы проводятся с сохранением исторических габаритов памятника, включая пятно застройки и высотные отметки, согласно Паспорту объекта культурного наследия.</p>

          <p> Проект включает в себя организацию выставочного пространства и киноконцертный зал вместимостью 198 человек, включая 18 мест для маломобильных групп населения. Предусматривает увеличение глубины сцены, устройство артистических комнат, размещение видео и звуко-проекционных комнат на антресольном этаже. С целью сохранения исторической атмосферы, интерьеры киноконцертного зала и все проектные решения выполнены на основании строгого соблюдения &laquo;предмета охраны культурного наследия&raquo; и акустического расчета.</p>
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
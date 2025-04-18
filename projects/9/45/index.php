<?php
$page_title = "Государственный Центр Современного Искусства";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_340px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1 md:mt-[-72px]">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Государственный Центр Современного Искусства</h1>
        <div class="text-lg text-gray-500">2013 Россия, г. Москва, САО, Хорошёвское шоссе, владение 38а</div>
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
    <div class="lg:order-2 lg:h-[calc(100vh-300px)] lg:sticky lg:top-8 lg:overflow-y-auto custom-scrollbar">
      <div class="prose max-w-none lg:pr-4">
        <div class="space-y-4 text-gray-600">
          <p align="justify">Общая площадь проектирования  45&nbsp;600 м.кв.
            <br />
            Международный конкурс | Архитектурно - градостроительное решение
          </p>

          <p align="justify"> Архитектурное решение объекта в большой степени сформировано контекстом &ndash; площадка строительства расположена в центре крупнейшей площади Москвы &ndash; Ходынского поля. Масштабное пространство бывшего аэродрома не имеет градостроительной доминанты, способной структурировать данную часть ткани города. </p>

          <p align="justify">Планируемый к строительству торговый комплекс &laquo;Авиапарк&raquo; сделает данное пространство ещё более размытым, несобранным, разобщённым. Как ответ на эту комплексную и многомерную задачу, предлагаемое проектное решение формирует чистый архитектурный объем &ndash; перевернутую пирамиду неправильной формы. </p>

          <p align="justify">Это своеобразный проун, прорезающий разряженное пространство Ходынской площади, и организующий до этого несвязанный набор объемных элементов окружающей застройки. Здание становится новой высотной и объемной доминантой, лэндмарком, готовым к многоплановому восприятию с видовых точек, расположенных на различных дистанциях от объекта. </p>

          <p align="justify"> Выставочные пространства ГЦСИ расположены в нескольких этажах надземной части здания, следуя форме здания, площадь залов увеличивается с повышением этажности. На этаже, расположенном на максимальной высотной отметке, размещено основное общественное пространство с кафе, магазином, и видовой площадкой на высоте 65 метров с протяженной 200-метровой плоскостью панорамного остекления и верхними световыми фонарями. Надземные этажи связаны системой эскалаторов, обеспечивающих спиралеобразный маршрут движения посетителей по многоуровневому пространству центра.</p>

          <p align="justify"> Парковка для посетителей, погрузочно-разгрузочная площадка, а также технические помещения размещены в подземных этажах здания. Через все этажи объекта проходит система основных вертикальных коммуникационных связей, сблокированных в лестнично-лифтовом ядре в северном основании пирамидального объема здания.    </p>

          <p align="justify"> Большая часть участка проектирования на уровне земли отдана под открытое общественное пространство, сформированное у входа в ГЦСИ, и интегрируемое в структуру проектируемой парковой зоны. Транзитные автомобильные потоки переносятся за северную границу участка проектирования, сквозной въезд-выезд парковки центра современного искусства осуществляется через подземную часть объекта, без пересечения основных пешеходных маршрутов. Образуется безбарьерная пешеходная связь ГЦСИ с метро и парком Ходынского поля. </p>

          <p align="justify">Оставляя и обновляя взлётную полосу в рамках проекта, мы формируем ещё одну площадку для проведения  постоянных или временных масштабных выставок произведений искусства, перфомансов и художественных акций. Эвакуационные выходы с подземных этажей расположены в надземной части в бетонных боксах, которые можно использовать как временные &laquo;полотна&raquo; для граффити, размещения информации, афиш.        </p>

          <p align="justify">Фасад здания выполнен из светопроводящего бетона. За счет этого в дневное время достигается мягкое и равномерное естественное освещение внутренних выставочных пространств. В ночное время при взгляде снаружи объем здания становится визуально полупрозрачным, сквозь него контражуром проступают контуры объектов искусства и посетителей центра. Наклонная плоскость фасада, выходящая на площадь, играет роль медиа-полотна с трансляцией видеоарта, или статичных произведений искусства.</p>

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
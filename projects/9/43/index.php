<?php
$page_title = "МХТ им. А.П.Чехова";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_340px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1 md:mt-[-72px]">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">МХТ им. А.П.Чехова</h1>
        <div class="text-lg text-gray-500">Здание филиала ФГБУК &laquo;Московский Художественный Академический Театр им.А.П.Чехова&raquo;
          <br />
          Москва ЮАО пересечение просп. Андропова с ул. Нагатинской
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
    <div class="lg:order-2 lg:h-[calc(100vh-300px)] lg:sticky lg:top-8 lg:overflow-y-auto custom-scrollbar">
      <div class="prose max-w-none lg:pr-4">
        <div class="space-y-4 text-gray-600">
          <p align="justify">Общая площадь проектирования 31&nbsp;572 м.кв.<br>
            Архитектурно-градостроительное решение / АГР<br>
            Технологические решения</p>
          <p align="justify"> Контур основания здания сформирован границами охранных зон инженерных сетей, и образует треугольную площадь на участке, прилегающем к вестибюлю станции метро «Коломенское». Главный фасад театра раскрывается на создаваемое на данном участке общественное пространство. Основной композиционный элемент театральной площади - линейные элементы, объединяющие группы элементов благоустройства: скамейки, клумбы и кадки с деревьями, создающими импровизированный вишневый сад, как символ одного из знаковых произведений Антона Павловича Чехова.</p>
          <p align="justify"> Объём первых этажей, зрительской части здания, в зонах фойе и ресторана прорезан большими световыми витражами, выходящими на главный фасад театра. Ритм, заданный утоняющимися витражными элементами, прерывается треугольным объемом козырька, акцентирующего основную входную группу театра. Для обеспечения восприятия на ближней дистанции, витражные элементы покрыты сетчатой структурой переплётов квадратного сечения из натуральной меди.</p>
          <p align="justify"> Верхний блок здания смещен относительно нижней части, что создает многоплановость восприятия объема, и помогает визуально нивелировать массивность сооружения. Деревянные ламели на верхних этажах пропускают дневной свет, и одновременно скрывают жизнь театра от любопытных взглядов прохожих, что важно, так как здание находится на оживлённом месте – вблизи станции метро Коломенское, и на пересечении двух загруженных магистралей: проспекта Андропова и Нагатинской улицы.</p>
          <p align="justify"> Новая сцена филиала, полностью повторяет сцену на Камергерском переулке, что позволяет переносить спектакли текущего репертуара в новое здание, без каких либо изменений. При этом новая сцена оснащена системой трансформации сцены и зрительного зала, что позволит значительно расширить репертуар театра.</p>
          <p align="justify"> На последних этажах здания размещены гримерные комнаты для актёров гастролирующих трупп.<br>
            В подземных этажах расположены парковочные места для сотрудников театра. Вместительных склад хранения декораций, зал для звукозаписи. </p>
          <p align="justify"> Площадь перед &nbsp;театром может играть роль репетиционной площадки для молодых актёров, или проведения праздников, выстраивая общение города с театром. Возможна реконструкция выхода из метро, превращение объёма входа в небольшой открытый амфитеатр, что сделает площадь ещё более интерактивной.</p>
          <p align="justify"> Натуральные материалы применённые в отделке здания - это декоративный керамический кирпич, тонированное &nbsp;дерево &nbsp;(специальная обработка, для категории пожаробезопасности Г0) и медь - материалы которые характеризуют домашнюю атмосферу, ценимую театральным коллективом МХТ. </p>
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
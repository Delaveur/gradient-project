<?php
$page_title = "ТРЦ Соловьи Плаза";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="container mx-auto px-4 py-8">
  <!-- Весь контент в одной колонке на мобильных -->
  <div class="flex flex-col lg:grid lg:grid-cols-[1fr_240px] lg:gap-8 xl:grid-cols-[1fr_340px]">
    <!-- Левая колонка (галерея + заголовок) -->
    <div class="lg:order-1 md:mt-[-72px]">
      <!-- Заголовок -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">ТРЦ Соловьи Плаза</h1>
        <div class="text-lg text-gray-500">2011 Россия, Брянск</div>
      </div>

      <!-- Галерея -->
      <div class="relative mb-4">
        <img id="main-image" class="w-full h-[479px] object-cover rounded-lg cursor-pointer" 
             onclick="openModal(currentIndex)">
        <!-- Кнопки навигации -->
        <button class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white backdrop-blur-sm p-2.5 rounded-full shadow-lg transition-all hover:scale-110 active:scale-95"
                onclick="changeSlide(-1)">
          <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white backdrop-blur-sm p-2.5 rounded-full shadow-lg transition-all hover:scale-110 active:scale-95"
                onclick="changeSlide(1)">
          <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
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
          <p>Общая площадь проектирования 79 890 м.кв.
            <br />
          Стадия Проект (все разделы согласно постановлению # 87 )</p>
          <p>Площадка строительства торгово-развлекательного центра по ул. Флотской, Бежицкого района, в пределах поймы р. Десна.</p>
          <p>В основу архитектурно - планировочных решений была положена органическая интеграция объекта в имеющийся природный ландшафт, что отражено в цветовом решении фасадов, а так же его приоритетное значение структуре микрорайона и города в целом.</p>
          <p>Проект имеет исключительное расположение на стыке Бежицкого и Советского районов города и будет также нацелен на проектируемый жилой массив, расположенный по ул. Флотская. Такое местоположение Торгово-развлекательного центра не только даст экономический эффект при его эксплуатации, но и повысит уровень жизни, как для жителей района, так и для транзитных пассажиров.</p>
          <p>Территория участка делится две основных зоны. На участке, приближенным к улице Флотская, расположено здание Торгового центра, наземная парковка 2280 машиномест и отдельная парковка для администрации торгового центра, расположенная рядом с входами в здание для персонала. На второй части участка, располагается территория с озером, которую предусматривается благоустроить. Укрепить береговую линию, граничащую с основным зданием, организовать прогулочные зоны, горизонтальные коммуникации (лёгкие мосты через озеро), летние кафетерии и небольшой пляж. Въезд и выезд на территорию торгово-развлекательного центра и доступ к парковочным местам осуществляется с улицы Флотская оборудованной дополнительными полосами разгона- торможения. </p>
          <p>Здание включает в себя два наземных этажа, и один технологический туннель для прокладки инженерных коммуникаций. Высота здания в максимальной точке 18 м. 
            <br />
          Архитектурно - планировочное решение здания предусматривает создание двух многофункциональных объёмов, связанных между собой галерей, общая площадь здания 80 450 м.кв.</p>
          <p>В здании торгово-развлекательного центра размещаются гипермаркет &laquo;РЕАЛ&raquo;, гипермаркет электронных товаров «Медиа Маркт», магазины промышленных товаров, 
            <br />
          Здание торгово-развлекательного центра - двухэтажная торговая галерея - включает в себя помещения: одно или двух этажные магазины одежды, обуви и сопутствующих товаров, гипермаркет электроники и бытовой техники. 
            <br />
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

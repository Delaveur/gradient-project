<?php
$page_title = "Клиенты";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="pr-2 pl-2 text-justify hyphens-auto">
  <p>Проектное бюро «Градиент» создает партнерские отношения с Клиентами, ориентированные на долгосрочную перспективу, доверие и взаимовыгодные условия сотрудничества. </p><br />
  <p>В числе деловых партнеров Нашей Компании:</p>
  <section>
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div>
          <p>FH Development ОАО</p>

          <p>BILFINGER HSG</p>

          <p>Danya Cebus Rus LLC</p>

          <p>SMINEX</p>

          <p>Eterna real estate</p>

          <p>Сибнефтегаз ОАО</p>

          <p>Европейская подшипниковая корпорация ЗАО</p>

          <p>Ритейл-парк Котово ЗАО</p>

          <p>Театрально-декорационные мастерские ЗАО</p>

          <p>Новоарбатский ТД</p>

          <p>Головино Плаза БЦ</p>

          <p>РСК Архитектурное наследие</p>

          <p>РСК Возрождение</p>

          <p>AS+ Architects</p>

          <p>KOLME</p>
        </div>
        <div>
          <p>Концерн Калашников ОАО </p>

          <p>Sakhalin Energy Investment Company Ltd.</p>

          <p>Аэроэкспресс </p>

          <p>Миэль </p>

          <p>АФК СИСТЕМА</p>

          <p>Raiffeisenbank</p>

          <p>БАНК РОССИЙСКИЙ КРЕДИТ ОАО</p>

          <p>McDonald&rsquo;s</p>

          <p>Bosco Di Ciliedgi</p>

          <p>COLIN’S</p>

          <p>LA COSTE</p>

          <p>CHARUEL</p>

          <p>Снежная королева </p>

          <p>НеоФарм </p>

          <p>Тех-хаб БиоКлюч </p>
        </div>
        <div class="lg:w-[175px] grid grid-cols-3 sm:grid-cols-5 sm:col-span-2 lg:grid-cols-2 lg:col-span-1 gap-4">
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/01.jpg" onclick="openModal(0)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/02.jpg" onclick="openModal(1)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/03.jpg" onclick="openModal(2)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/04.jpg" onclick="openModal(3)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/05.jpg" onclick="openModal(4)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/06.jpg" onclick="openModal(5)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/07.jpg" onclick="openModal(6)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/08.jpg" onclick="openModal(7)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/09.jpg" onclick="openModal(8)"></div>
          <div><img class="h-[105px] border border-black cursor-pointer" src="/images/customers/10.jpg" onclick="openModal(9)"></div>
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
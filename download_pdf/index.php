<?php
$page_title = "Скачать буклеты PDF";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<div class="pr-2 pl-2 text-center">
  <section>
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-4">
        <div>
          <a target="_blank" href="/download_pdf/architect_2016_3.pdf"><img class="border border-black" src="/images/download_pdf/1.jpeg"></a>
          <p class="pt-4">Портфолио | Архитектура | pdf 36 mb</p>
        </div>
        <div>
          <a target="_blank" href="/download_pdf/interer_2016_3.pdf"><img class="border border-black" src="/images/download_pdf/2.jpeg"></a>
          <p class="pt-4">Портфолио | Интерьер | pdf 51 mb</p>
        </div>
        <div>
          <a target="_blank" href="/download_pdf/concept_2016_3.pdf"><img class="border border-black" src="/images/download_pdf/3.jpeg"></a>
          <p class="pt-4">Портфолио | Концепция развития объектов комерческой недвижимости | pdf 24 mb</p>
        </div>
        <div>
          <a target="_blank" href="/download_pdf/setevie_2016_3.pdf"><img class="border border-black" src="/images/download_pdf/4.jpeg"></a>
          <p class="pt-4">Портфолио | Сетевые проекты | pdf 13 mb</p>
        </div>
      </div>
    </div>
  </section>


  <?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>
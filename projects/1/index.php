<?php
$page_title = "Проекты";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<!-- Основная структура страницы -->
<div class="container mx-auto px-4 py-8">
  <div class="grid md:grid-cols-2 gap-8">
    <!-- Левая колонка с галереей -->
    <div>
      <!-- Главное изображение -->
      <div class="relative mb-4">
        <img id="main-image" class="w-full h-[479px] object-cover rounded-lg cursor-zoom-in" 
             onclick="openModal(currentIndex)">
        <!-- Кнопки навигации -->
        <button class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/80 p-2 rounded-full shadow hover:bg-white"
                onclick="changeSlide(-1)">
          ←
        </button>
        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/80 p-2 rounded-full shadow hover:bg-white"
                onclick="changeSlide(1)">
          →
        </button>
      </div>

      <!-- Превью галереи -->
      <div class="flex overflow-x-auto gap-2 pb-4" id="thumbnail-container">
        <!-- Миниатюры будут добавлены через JS -->
      </div>
    </div>

    <!-- Правая колонка с текстом -->
    <div class="prose">
      <h2>Заголовок раздела</h2>
      <p>Текст вашего раздела здесь...</p>
    </div>
  </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="desc" />
  <meta name="keywords" content="keyword" />
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Проектное бюро Градиент'; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            menuButton.addEventListener('click', function() {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuButton.querySelector('svg').classList.toggle('rotate-90');
            });
        });
    </script>
    <style>
        body {
                font-family: Arial, sans-serif;
        }
        .hyphens-auto {
            hyphens: auto;
            -webkit-hyphens: auto;
        }
    </style>
</head>
<body class="bg-white text-[13px] text-gray-600">
    <div class="max-w-[1250px] mx-auto flex justify-between items-center">
        <div class="mt-5 mb-5 ml-2 md:mt-7 md:ml-10 md:mb-0">
            <a href="/">
                <img src="https://gradient-project.com/image/logo.png" alt="Градиент">
            </a>
        </div>
        <!-- Mobile button -->
        <button 
            id="menu-button"
            class="md:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
            aria-label="Menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <svg 
                class="h-6 w-6 transition-transform" 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke="currentColor"
            >
                <path 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    stroke-width="2" 
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>
    </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="md:hidden hidden absolute w-full bg-white shadow-lg py-2 z-40 uppercase font-bold">
                <a href="/about-us/" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900">О компании</a>
                <a href="/services" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900">Услуги</a>
                <a href="/projects" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900">Проекты</a>
                <a href="/clients" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900">Клиенты</a>
                <a href="/awards" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900">Награды и публикации</a>
                <a href="/contacts" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900">Контакты</a>
                <a href="/files/buklet.pdf" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-gray-900">Скачать буклет PDF</a>
            </div>
    <div class="max-w-[1250px] mx-auto flex">
    <!-- Левая колонка (хедер) -->
    <aside class="w-[256px] min-w-64 px-6 pt-10 hidden md:flex flex-col justify-between">
      <div>
      </div>

      <!-- Подменю (для раздела Проекты) -->
      <div id="submenu-projects" class="mb-10 hidden">
        <!-- Пример подменю: будет отображаться при переходе на раздел "Проекты" -->
        <nav class="space-y-2 text-right font-medium">
          <a href="/projects/interior" class="block hover:text-gray-900">Интерьеры</a>
          <a href="/projects/architecture" class="block hover:text-gray-900">Архитектура</a>
          <a href="/projects/public" class="block hover:text-gray-900">Общественные</a>
        </nav>
      </div>

      <!-- Основное меню -->
      <nav class="space-y-3 text-right uppercase font-bold">
        <a href="/about-us/" class="hover:text-gray-900 block">О компании</a>
        <a href="/services" class="hover:text-gray-900 block">Услуги</a>
        <a href="/projects" class="hover:text-gray-900 block">Проекты</a>
        <a href="/clients" class="hover:text-gray-900 block">Клиенты</a>
        <a href="/awards" class="hover:text-gray-900 block">Награды и публикации</a>
        <a href="/contacts" class="hover:text-gray-900 block">Контакты</a>
        <a href="/files/buklet.pdf" class="hover:text-gray-900 block">Скачать буклет PDF</a>
      </nav>
    </aside>

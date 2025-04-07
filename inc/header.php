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
    <style>
    #thumbnail-container::-webkit-scrollbar {
    display: none;
    }
    #thumbnail-container {
    -ms-overflow-style: none;
    scrollbar-width: none;
    }
    </style>
    <style>
  /* Кастомный скроллбар */
  .custom-scrollbar::-webkit-scrollbar {
    width: 8px;
  }
  
  .custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
    margin: 4px 0;
  }
  
  .custom-scrollbar::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
    border: 2px solid transparent;
    background-clip: content-box;
    transition: background 0.2s;
  }
  
  .custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
    background-clip: content-box;
  }
  
  .custom-scrollbar {
    scrollbar-width: thin;
    scrollbar-color: #cbd5e1 transparent;
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

      <?php
$currentUrl = $_SERVER['REQUEST_URI'];
echo "<!-- Текущий URL: $currentUrl -->";
if (preg_match('#^/projects/(\d+)(/(\d+))?#', $currentUrl, $matches)) {
    $sectionId = $matches[1];
    $subSectionId = isset($matches[3]) ? $matches[3] : null;

    $sections = [
        1 => 'Коммерческая недвижимость',
        9 => 'Объекты культуры и искусства',
        2 => 'Административные здания',
        3 => 'Промышленные объекты',
        4 => 'Жилые дома',
        10 => 'Общественный интерьер',
        5 => 'Сетевые проекты',
    ];
    
    $subsections = [
        1 => [
            2 => 'ТРЦ Соловьи Плаза',
            48 => 'ТРЦ Удачи',
            3 => 'ТЦ Новоарбатский',
            37 => 'ТРК г.Ульяновск',
            41 => 'ТЦ Галерея',
            80 => 'Международный центр шоу-румов Expolon',
            38 => 'Бизнес-центр Дубровка',
            39 => 'Бизнес-центр ул.Алексея Свиридова',
        ],
        9 => [
            43 => 'МХТ им. А.П.Чехова',
            45 => 'Государственный Центр Современного Искусства',
            85 => 'Каретный сарай на территории «Измайлово»',
        ],
        2 => [
            4 => 'Гостиничный комплекс СГАФКСиТ',
            35 => 'Административное здание Сбербанка РФ',
            9 => 'ЗАО Райффайзенбанк',
        ],
        3 => [
            46 => 'Депо им. Ильича',
            36 => 'Кондитерская фабрика Коркунов',
            5 => 'Производство по изготовлению каминов',
        ],
        4 => [
            91 => 'ЖК Андерсен',
            10 => 'Жилая застройка остров Кишь (Иран)',
            11 => 'Индивидуальный жилой дом, коттеджный поселок Усадьба Бергов',
            6 => 'Загородный посёлок “Старочеркасская Ривьера”',
            84 => 'Загородный дом для молодой семьи.',
        ],
        10 => [
            44 => 'Интерьер офиса компании ЕПК',
            92 => 'Офис компании АФК СИСТЕМА',
            50 => 'Интерьер офиса компании Сахалинская Энергия  Сollaboration area',
            86 => 'Интерьер в Бизнес-центре Дубровка',
            96 => 'Каретный сарай на территории «Измайлово»',
            93 => 'Офис компании КЛЮЧ',
            49 => 'Интерьер офиса компании Сахалинская Энергия SEB1',
        ],
        5 => [
            32 => 'Costa coffee',
            30 => 'Lacoste',
            34 => 'Uniqlo',
            31 => 'Colins',
            7 => 'BOSCO',
            82 => 'Charuel',
            33 => 'Снежная королева',
        ],
    ];
    
    ?>

    <div id="submenu-projects" class="mb-10">
        <nav class="text-right">
            <?php foreach ($sections as $id => $name): ?>
                <div>
                    <a href="/projects/<?php echo $id; ?>/" class="block <?php echo $id == $sectionId ? 'text-[14px] text-black underline decoration-gray-300' : 'text-[14px] hover:text-black hover:underline hover:decoration-gray-300'; ?>">
                        <?php echo $name; ?>
                    </a>
                    <?php if ($id == $sectionId && isset($subsections[$id])): ?>
                        <ul class="mt-1 mb-2 text-gray-600">
                            <?php foreach ($subsections[$id] as $subId => $subName): ?>
                                <li class="ml-4">
                                    <a href="/projects/<?php echo $id . '/' . $subId; ?>/" 
                                        class="<?php echo $subId == $subSectionId ? 'text-black underline decoration-gray-300' : 'hover:text-black hover:underline hover:decoration-gray-300'; ?>">
                                            <?php echo $subName; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </nav>
    </div>

<?php } ?>


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

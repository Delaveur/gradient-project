  </div>

  <script>
let currentIndex = 0;
let images = [];

async function initGallery() {
  // Получаем текущий путь страницы
  let pagePath = window.location.pathname;

  // Обрабатываем путь
  pagePath = pagePath
    .replace(/\/index\.php$/, '')
    .replace(/\/index\.html?$/, '')
    .replace(/\/$/, '')
    .replace(/^\//, ''); // Убираем ведущий слэш

  try {
    // Запрашиваем изображения через PHP-скрипт
    const response = await fetch(`/get-images.php?path=${encodeURIComponent(pagePath)}`);
    const data = await response.json();
    
    if(data.images && data.images.length > 0) {
      images = data.images;
      renderGallery();
      initSwipe();
    } else {
      console.error('No images found');
    }
  } catch (error) {
    console.error('Error loading images:', error);
  }
}

function handleModalClick(event) {
  if (event.target === document.getElementById('modal')) {
    closeModal();
  }
}

function scrollToThumb() {
  const container = document.getElementById('thumbnail-container');
  const activeThumb = container?.children[currentIndex];
  
  if (!activeThumb) return;

  const containerRect = container.getBoundingClientRect();
  const thumbRect = activeThumb.getBoundingClientRect();
  
  const isVisible = (
    thumbRect.left >= containerRect.left &&
    thumbRect.right <= containerRect.right
  );

  if (!isVisible) {
    activeThumb.scrollIntoView({
      behavior: 'smooth',
      block: 'nearest',
      inline: 'center'
    });
  }
}

function renderGallery() {
  const mainImg = document.getElementById('main-image');
  const thumbnails = document.getElementById('thumbnail-container');

  mainImg.src = images[currentIndex];
  thumbnails.innerHTML = images.map((img, i) => `
    <img class="w-20 h-20 flex-none object-cover cursor-pointer rounded ${
      i === currentIndex ? 'ring-2 ring-blue-500' : 'opacity-75 hover:opacity-100'
    } transition-all"
         src="${img}"
         onclick="setCurrentIndex(${i})">
  `).join('');

  requestAnimationFrame(scrollToThumb);
}

function changeSlide(step) {
  currentIndex = (currentIndex + step + images.length) % images.length;
  renderGallery();
}

function setCurrentIndex(index) {
  currentIndex = index;
  renderGallery();
}

function openModal(index) {
  currentIndex = index;
  const modal = document.getElementById('modal');
  const modalImg = document.getElementById('modal-image');
  modalImg.src = images[currentIndex];
  modal.classList.remove('hidden');
}

function closeModal() {
  document.getElementById('modal').classList.add('hidden');
}

function changeModalSlide(step) {
  currentIndex = (currentIndex + step + images.length) % images.length;
  document.getElementById('modal-image').src = images[currentIndex];
}

function initSwipe() {
  const swipeElements = [
    document.getElementById('main-image'),
    document.getElementById('modal-image'),
    document.getElementById('modal')
  ];

  let touchStartX = 0;
  let touchStartY = 0;
  const SWIPE_THRESHOLD = 50;
  const VERTICAL_THRESHOLD = 30;

  const handleSwipeStart = (e) => {
    touchStartX = e.touches[0].clientX;
    touchStartY = e.touches[0].clientY;
  };

  const handleSwipeEnd = (e) => {
    const touchEndX = e.changedTouches[0].clientX;
    const touchEndY = e.changedTouches[0].clientY;
    
    const deltaX = touchEndX - touchStartX;
    const deltaY = touchEndY - touchStartY;

    if (Math.abs(deltaY) > VERTICAL_THRESHOLD) return;

    if (Math.abs(deltaX) > SWIPE_THRESHOLD) {
      const direction = deltaX > 0 ? -1 : 1;
      
      if (e.target.closest('#modal')) {
        changeModalSlide(direction);
      } else {
        changeSlide(direction);
      }
    }
  };

  swipeElements.forEach(el => {
    if (!el) return;
    
    el.addEventListener('touchstart', handleSwipeStart, { passive: true });
    el.addEventListener('touchend', handleSwipeEnd, { passive: true });
    
    el.addEventListener('mousedown', (e) => {
      touchStartX = e.clientX;
      touchStartY = e.clientY;
    });
    
    el.addEventListener('mouseup', (e) => {
      handleSwipeEnd({
        changedTouches: [{
          clientX: e.clientX,
          clientY: e.clientY
        }]
      });
    });
  });
}

document.addEventListener('DOMContentLoaded', initGallery);
</script>
</body>
</html>
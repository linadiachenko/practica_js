document.addEventListener('DOMContentLoaded', function () {
    const video = document.getElementById('kitchenVideo');
    const playButton = document.querySelector('.play-button');
  
    playButton.addEventListener('click', function () {
      if (video.paused || video.ended) {
        video.play();
        playButton.style.display = 'none';
      } else {
        video.pause();
        playButton.style.display = 'block';
      }
    });
  
    video.addEventListener('click', function () {
      if (!video.paused) {
        video.pause();
        playButton.style.display = 'block';
      }
    });
  
    video.addEventListener('ended', function () {
      playButton.style.display = 'block';
    });
  });

  
  // --- Efecto de inclinación dinámica para las imágenes de la galería ---

  document.addEventListener('DOMContentLoaded', () => {
    const galleryItems = document.querySelectorAll('.gallery-item');
  
    galleryItems.forEach(item => {
      const img = item.querySelector('img');
  
      item.addEventListener('mousemove', (e) => {
        const rect = item.getBoundingClientRect();
  
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
  
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
  
        const rotateX = ((y - centerY) / centerY) * -20; // Збільшено з 10 до 20
        const rotateY = ((x - centerX) / centerX) * 20; // Збільшено з 10 до 20
  
        img.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
      });
  
      item.addEventListener('mouseleave', () => {
        img.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
      });
    });
  });
  

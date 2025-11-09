// MOBILE MENU
document.querySelector('.hamburger')?.addEventListener('click', () => {
  document.querySelector('.nav-menu').classList.toggle('active');
});

// USER DROPDOWN
document.querySelector('.user-menu')?.addEventListener('click', (e) => {
  e.stopPropagation();
  const dropdown = document.querySelector('.user-dropdown');
  dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});
document.addEventListener('click', () => {
  const dropdown = document.querySelector('.user-dropdown');
  if (dropdown) dropdown.style.display = 'none';
});

// IMAGE GALLERY (WORKS ON ALL game1.html, game2.html, game3.html)
function setMain(img) {
  document.getElementById('mainImg').src = img.src;
}

let currentImg = 0;
const thumbs = document.querySelectorAll('.thumbnails img');

function prevImg() {
  currentImg = (currentImg - 1 + thumbs.length) % thumbs.length;
  document.getElementById('mainImg').src = thumbs[currentImg].src;
}

function nextImg() {
  currentImg = (currentImg + 1) % thumbs.length;
  document.getElementById('mainImg').src = thumbs[currentImg].src;
}
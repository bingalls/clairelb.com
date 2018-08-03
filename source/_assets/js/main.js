const navButton = document.querySelector('#nav-button');
const navLinks = document.querySelector('#mobile-nav-links');

navButton.addEventListener('click', e => {
  if (navLinks.classList.contains('hidden')) {
    return navLinks.classList.remove('hidden');
  }
  navLinks.classList.add('hidden');
});

const navButton = document.querySelector('#nav-button');
const navLinks = document.querySelector('#mobile-nav-links');

// unused param e
navButton.addEventListener('click', e => {
  'use strict';
  if (navLinks.classList.contains('hidden')) {
    return navLinks.classList.remove('hidden');
  }
  navLinks.classList.add('hidden');
});

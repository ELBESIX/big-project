const parallax = document.querySelector('.parallax');

window.addEventListener('mousemove', function(e) {
  const x = e.clientX / window.innerWidth;
  const y = e.clientY / window.innerHeight;
  const moveX = (x - 0.5) * 300;
  const moveY = (y - 0.5) * 300;
  parallax.querySelector('img').style.transform = `translateX(${moveX}px) translateY(${moveY}px)`;
});
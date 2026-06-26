window.addEventListener('scroll', function() {
  var backToPrevBtn = document.querySelector('.back-to-prev');
  if (window.pageYOffset >= (document.body.scrollHeight - window.innerHeight)) {
    backToPrevBtn.classList.add('show');
  } else {
    backToPrevBtn.classList.remove('show');
  }
});
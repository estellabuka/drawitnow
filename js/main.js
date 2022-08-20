function lockScroll() {
    document.body.classList.toggle('lock-scroll');
    checkItem.checked = false;
}


function closeHamburger() {
    let checkItem = document.getElementById('menu-toggle');
    checkItem.checked = false;
    document.body.classList.remove('lock-scroll');
}

$('a[href*="#"]').on('click', function() {
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top - 120
    }, 800);
    return false;
  });
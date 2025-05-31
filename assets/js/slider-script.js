(function($) {
  $(document).ready(function () {
    const $slider = $('.cslpr-slider');
    const $slides = $('.cslpr-slide');
    let currentIndex = 0;

    function goToSlide(index) {
      const slideWidth = $slides.first().outerWidth();
      $slider.css('transform', `translateX(-${slideWidth * index}px)`);
    }

    // Auto slide every 4 seconds
    setInterval(() => {
      currentIndex = (currentIndex + 1) % $slides.length;
      goToSlide(currentIndex);
    }, 4000);
  });
})(jQuery);

<style type="text/css">
html{
  scroll-behavior: auto;
}
.back_to_top {
    font-size: 20px;
    padding: 10px;
    position: fixed;
    bottom: 30px;
    left: 20px;
    z-index: 2147483648;
    width: 50px;
    height: 50px;
    border-radius: 60px;
    text-align: center;
    line-height: 30px;
    background: #000000;
    color: #fff !important;
    cursor: pointer;
    display: none;
    opacity: 0.6;
  }
  
  .back_to_top:hover {
    background: #000000;
    opacity: 1;
    color: white !important;
  }
  
  .back_to_top-show {
    display: block;
  }

</style>

<div role="button" class="back_to_top"><span class="fa fa-arrow-up fa-lg"></span></div>

<script type="text/javascript">

(function() {
  'use strict';

  function trackScroll() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      goTopBtn.classList.add('back_to_top-show');
    }
    if (scrolled < coords) {
      goTopBtn.classList.remove('back_to_top-show');
    }
  }

  function backToTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
  }

  var goTopBtn = document.querySelector('.back_to_top');

  window.addEventListener('scroll', trackScroll);
  goTopBtn.addEventListener('click', backToTop);
})();

</script>

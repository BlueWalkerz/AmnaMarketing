<script src="js/typed.js"></script>
        <script>
            var typed = new Typed('.typed', {
            strings: [
                'Our skill your advance', 
                'Our platform is your finest investment',
                'Here to make your business recognised'
            ],
            typeSpeed: 60,
            cursorChar: '_',
            backSpeed: 60,
            loop: true
            });
        </script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 1,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  800: {
                    items: 2
                  },
                  1200: {
                    items: 3
                  }
                }
              })
            })
          </script>
          <script>
              $(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
          </script>
                
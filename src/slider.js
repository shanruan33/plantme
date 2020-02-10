
          $(document).ready(function () {
            //configuration
            var xOffset = 300;
            var animationSpeed = 1500;
            var slideSpeed = 3000;
            var startSlide = 1;
          
            //cache the DOM
            var slider = $("#slider-box");
            // var slideContainer = slider.find("ul");
            // var slides = slideContainer.find("li");
            var slideContainer = $("#parent");
            var slides = $(".slide");
          
            var sliderInterval;
            function startSlider() {
              sliderInterval = setInterval(function () {
                slideContainer.animate({ "margin-left": "-=" + xOffset }, animationSpeed, function () {
                  startSlide++;
                  if (startSlide >= 7) {
                    startSlide = 1;
                    //slideContainer.animate({"margin-left": 0},500);
                    slideContainer.css("margin-left", "0px");
                  };
                });
              }, slideSpeed);
            };
          
            function stopSlider() {
              clearInterval(sliderInterval);
            }
            //mouse events
            slider.on("mouseenter", stopSlider);
            slider.on("mouseleave", startSlider);
            startSlider();
            console.log(reStartSlide);
          });

                  
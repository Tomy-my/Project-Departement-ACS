        /* FadeIn Scroll */
        $(document).ready(function() {
    
            /* Every time the window is scrolled ... */
            $(window).scroll( function(){
            
                /* Check the location of each desired element */
                $('.geo_left').each( function(i){
                    
                    var bottom_of_object = $(this).position().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();
                  
        
                    var top_of_object = $(this).position().top - ($(this).outerHeight() - 900);
                  console.log(top_of_object);
                  console.log(bottom_of_window);
        
                  
                    
                    /* If the object is completely visible in the window, fade it it */
                    if( bottom_of_window >= (top_of_object) ){
                        
                        $(this).animate({'opacity':'1'},1700);
                            
                    }
                    
                }); 
            
            });
            
        });
        
        //         var smoothScroll = {
        //     speed: 0,
        //     delay: 10, // en ms
        //     timer: null,
        //     scrollSpeed: 120,
        //     inertia: 0.93,
        //     init: function(){
        //         this.setEventsListeners();
        //     },
        
        //     setEventsListeners: function(){
        //         var me = this;
        //         $(document).bind('DOMMouseScroll mousewheel', function(e){
        //             me.setSpeed(e.originalEvent);
        //         });
        //      },
        
        //     setSpeed: function(e){
        //         var direction = e.detail ? -e.detail : e.wheelDelta;
        //         this.speed += direction < 0 ? -this.scrollSpeed : this.scrollSpeed;
        //         if(this.timer == null){
        //             this.timer = setTimeout(this.smoothScroll, this.delay, this); 
        //         }
        //         e.preventDefault();
        //     },
            
        //     smoothScroll: function(scope){
        //         var self = scope;
        //         self.speed *= self.inertia;
        
        //         var currScrollTop = $(window).scrollTop();
        //         $(window).scrollTop(currScrollTop-self.speed);
        
        //         if(self.speed < self.inertia && self.speed > -self.inertia){
        //             self.speed = 0;
        //             clearTimeout(self.timer);
        //             self.timer = null;
        //         }else{
        //             self.timer = setTimeout(self.smoothScroll, self.delay, self);
        //         }
        //     }
        // }
        
        // smoothScroll.init();


        const slides = document.querySelectorAll(".slide");
const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");
const auto = true;
const intervalTime = 6500;
let slideInterval;

const nextSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.nextElementSibling) {
    current.nextElementSibling.classList.add("current");
  } else {
    slides[0].classList.add("current");
  }
};

const prevSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add("current");
  } else {
    slides[slides.length - 1].classList.add("current");
  }
};

nextButton.addEventListener("click", () => {
  nextSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});
prevButton.addEventListener("click", () => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}

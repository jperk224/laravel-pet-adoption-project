var today = new Date();
var year = today.getFullYear();
var out = document.getElementById('date');
out.innerHTML = year;

/***** pet card fade in on scroll ******/
// adapted from Simon Codrington's solution at https://www.sitepoint.com/scroll-based-animations-jquery-css3/

//Cache reference to window and card items for more rapid excution
var $petCards = $('.pet-card-regular'); // the $ This is a convention to indicate jQuery collection
var $window = $(window);

// every time the scroll or resize event is fired, check if a card is in view and render it
// resize accounts for viewport and orientation changes
$window.on('scroll resize', checkInView);

// trigger a scroll event as soon as the DOM is ready so that if any of the cards that
// should fade in are within the viewport, they will be detected as in view and the fade in applied as if we had scrolled.
$window.trigger('scroll');

// check whether the card is in view to render it
// this is called every time we resize or scroll
function checkInView() {
    // cache top, bottom, and window height to detemrine current page position
    var windowHeight = $window.height();
    var windowTop = $window.scrollTop();
    var windowBottom = (windowTop + windowHeight);
    
    // grab the height and position of each pet card (each element in the $petCards array)
    $.each($petCards, function() {
      var $element = $(this);
      var elementHeight = $element.outerHeight();   // use outerHeight to account for padding, border, and margin
      var elementTop = $element.offset().top;
      var elementBottom = (elementTop + elementHeight);
  
      //check to see if this current container is within viewport
      if ((elementBottom >= windowTop) && (elementTop <= windowBottom)) {
            $element.addClass('visible');
      } 
      else {
        $element.removeClass('visible');
      }
    });
  }

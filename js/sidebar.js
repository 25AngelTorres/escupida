(function($) {
  //"use strict"; // Start of use strict

  // Toggle the side navigation
  $(".sidebarToggle-leftbar").on('click',function(e) {
    e.preventDefault();
    $(".sidebar").toggleClass("expand");
  });
  

})(jQuery); // End of use strict
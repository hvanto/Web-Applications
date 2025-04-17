// Sliding Banner With Organisation Logos
var copy = document.querySelector(".banner__logos__slide").cloneNode(true);
document.querySelector(".banner__logos").appendChild(copy);

var copy = document.querySelector("#logoslide").cloneNode(true);
document.querySelector("#logo").appendChild(copy);




// Swapping between CREATE and VIEW listings for P2P
$(document).ready(function(){
    // Initially hide the listings section
    $('.p2p__list').hide();
  
    // Show the create section and hide the listings section when CREATE is clicked
    $('h3.p2p__col__option__title:contains("CREATE")').click(function(){
      $('.p2p__create').show();
      $('.p2p__list').hide();
    });
  
    // Show the listings section and hide the create section when LISTINGS is clicked
    $('h3.p2p__col__option__title:contains("LISTINGS")').click(function(){
      $('.p2p__list').show();
      $('.p2p__create').hide();
    });
  });
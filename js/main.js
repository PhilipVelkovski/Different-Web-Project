
/*location dropdown */

//   $(".toggle-user-list").hide();
  
//   $(".toggle-user-list-mobile").hide();
//   $(".toggle-loc-list-mobile").hide();
// $(".toggle-loc-list").hide();



// $(".category-pop-up").hide();


// $(".togle-blog-list-mobile").hide();

$(document).ready(function(){
     //SWIPER
    //  var swiper = new Swiper(".mySwiper", {
    //     spaceBetween: 30,
    //     slidesPerView: "auto",
    //     freeMode: true,
    //     watchSlidesProgress: true,
    //   });
    //   var swiper2 = new Swiper(".mySwiper2", {
    //     spaceBetween: 10,
    //     navigation: {
    //       nextEl: ".swiper-button-next",
    //       prevEl: ".swiper-button-prev",
    //     },
    //     thumbs: {
    //       swiper: swiper,
    //     },
    //   });
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
                  100:{
                    slidesPerView: 1,
                    spaceBetween: 20
 
                  },
                  // when window width is >= 320px
                  320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                  },
                  // when window width is >= 480px
                  480: {
                    slidesPerView:1,
                    spaceBetween: 30
                  },
                  // when window width is >= 640px
                  640: {
                    slidesPerView: 2,
                    spaceBetween: 40
                  },
                  940: {
                    slidesPerView: 3,
                    spaceBetween: 40
                  }
                },
      });
      var swiper = new Swiper(".swiper-two", {
        slidesPerView: "auto",
        spaceBetween: 20,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
                  // when window width is >= 320px
                  320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                  },
                  // when window width is >= 480px
                  480: {
                    slidesPerView: 2,
                    spaceBetween: 30
                  },
                  // when window width is >= 640px
                  640: {
                    slidesPerView: 2,
                    spaceBetween: 40
                  },
                  890:{
                    slidesPerView: 6,
                    spaceBetween: 40
                  }
                },
      });
    //   const swipers = new Swiper('.mySwiper', {
    //     // Default parameters
    //     slidesPerView: 2,
    //     spaceBetween: 50,
    //     // Responsive breakpoints
    //     breakpoints: {
    //       // when window width is >= 320px
    //       320: {
    //         slidesPerView: 2,
    //         spaceBetween: 20
    //       },
    //       // when window width is >= 480px
    //       480: {
    //         slidesPerView: 3,
    //         spaceBetween: 30
    //       },
    //       // when window width is >= 640px
    //       640: {
    //         slidesPerView: 4,
    //         spaceBetween: 40
    //       }
    //     }
    //   });
          
    // const swiper = new Swiper('.swiper', {
    //     // Default parameters
    //     slidesPerView: 3,
    //     spaceBetween:"auto",
    //     // Responsive breakpoints
    //     breakpoints: {
    //       // when window width is >= 320px
    //       320: {
    //         slidesPerView: 2,
    //         spaceBetween: 20
    //       },
    //       // when window width is >= 480px
    //       480: {
    //         slidesPerView: 3,
    //         spaceBetween: 30
    //       },
    //       // when window width is >= 640px
    //       640: {
    //         slidesPerView: 4,
    //         spaceBetween: 40
    //       }
    //     }
    //   });

// Now you can use all slider methods like

     $(".hidden-search-btn").click(function(){
        $(".hidden-search-pop-up").toggle(500);
        $(".header").css({"position":"inherit"});
     });
     $(".exit-search").click(function(){
        $(".hidden-search-pop-up").hide();
     });
     $(".location-btn").click(function(){
         $(".toggle-loc-list").slideToggle(200);
     }); 

/*location dropdown mobile */
     $(".location-btn-mobile").click(function(){
        $(".toggle-loc-list-mobile").slideToggle(200);
    });

     
    $(".user-account").click(function(){
        $(".toggle-user-list").toggle();
    });


    $(".user-account-mobile").click(function(){
        $(".toggle-user-list-mobile").toggle();
    });

    $(".pages-list-wrapper").click(function(){
        if($(".togle-blog-list").is(":visible")){
            $(".togle-blog-list").hide();
        }
        $(".pages-list").slideToggle(200);
    });
/* Pages List */
    $(".blog-list").click(function(){
        if($(".pages-list").is(":visible")){
            $(".pages-list").hide();
        }

        $(".togle-blog-list").slideToggle(200);
    });


    
    $(".select-category-btn").click(function(){
        $(".header").css({"position":"inherit"});
        $(".category-pop-up").show();
    });
    $(".exit").click(function(){
        $(".category-pop-up").hide();
        
    $(".header").css({"position":"fixed"});
    });
    
    $(".select-category-btn-mobile").click(function(){
        $(".header").css({"position":"inherit"});
        $(".category-pop-up").show();
    });
    $(".exit").click(function(){
        $(".category-pop-up").hide();
        
    $(".header").css({"position":"fixed"});
    });
    $(".hidden-links-btn").click(function(){
        $(".pop-up-list").animate({
            width: "toggle"
       });
        // if((".pop-up-list").is(":visible")){
        //     $(".footer").hide(100);
        // } else {
        //     $(".footer").show(1);
        // }
    });

    $(".list-pages-hidden").click(function(){
        if($(".togle-blog-list-mobile").is(":visible")){
            $(".togle-blog-list-mobile").hide();
        }
        $(".hidden-list-mobile").slideToggle(200);
    });

    $(".blog-list-mobile").click(function(){
        if($(".hidden-list-mobile").is(":visible")){
            $(".hidden-list-mobile").hide();
        }

        $(".togle-blog-list-mobile").slideToggle(200);
    });

    

    $(".blog-list-mobile").click(function(){
        if($(".hidden-list").is(":visible")){
            $(".hidden-list").hide();
        }

        $(".togle-blog-list-mobile").slideToggle(200);
    });

   $(".fillter-btn").click(function(){
       $(".header").css({"position":"inherit"});
     $(".hide-fillter-pop-up").show();
    // $(".filter-category").animate({width:'toggle'},350);
   });
   $("#exit-filter").click(function(){
    $(".hide-fillter-pop-up").hide();
   });

   
   $("#counter .lower").click(function(event){
    var sum = $(".quantity").val();
     sum-- ;
     
 $(".quantity").val(sum);

 });
 $(".add-quan").click(function(event){
    var sum = $(".quantity").val();
     sum ++ ;
     console.log("ADD");
 $(".quantity").val(sum);

 

});
 //CART-POP-UP
 $(".cart-btn").click(function(){
     $(".hide-cart-pop-up").toggle();
     $(".header").css({"position":"inherit"});
 });
 $("#exit-cart-pop-up").click(function(){
    $(".hide-cart-pop-up").hide();
    $(".header").css({"position":"fixed"});
});
});
// const add = document.querySelector("#lower");
// add.addEventListener('click',(event)=>{
//    console.log("PROBAJ VAKA");
//  });
// function counter() {
    
//    $("#lower").click(function(event){
//     var sum = $("#quantity").val();
//      sum-- ;
//      console.log("minus");
     
//  $("#quantity").val(sum);
//  });
//  $("#add-quan").click(function(event){
//     var sum = $("#quantity").val();
//      sum ++ ;
//      console.log("ADD");
//  $("#quantity").val(sum);
//  });
// }
/*location dropdown mobile */

/*User lisrt */



/* Pages List */

/*mobile - category */
// $(document).ready(function(){
    
//     $(".select-category-btn-mobile").click(function(){
//         $(".header").css({"position":"inherit"});
//         $(".category-pop-up").show();
//     });
//     $(".exit").click(function(){
//         $(".category-pop-up").hide();
//     });
    
// });
/*mobile list*/
// $(".pop-up-list").hide();

// $(".togle-blog-list-mobile").hide();


// $(document).ready(function(){
//     if(window.innerWidth < 750) { $('.item-one').css({"display":"none"}) }

// });

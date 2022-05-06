$(document).read

$(document).ready(function () {
  $('.search-box').hide()
})
$(document).ready(function () {
     $('.active').click(function () {
         
          $('.search-box').toggle();
          $('search-input').focus();
    })


    $(document).ready(function(){       

  $(".follow-button").click(function(){
    if ($(".follow-button").text() == "+ Follow"){   
      
        $(".follow-button").animate({ width: '+=25px', left: '+=15px' }, 600, 'linear', function () { 
        $(".follow-button").text("Following");
        $(".follow-button").css("color", "white");
        $(".follow-button").css("background-color", " #764ba2");
        $(".follow-button").css("border-color", "none");
      });
      
    }else{
      $(".follow-button").animate({ width: '-=25px', left: '+=15px' }, 600, 'linear', function () { 
        $(".follow-button").text("+ Follow");
        $(".follow-button").css("color", "#764ba2");
        $(".follow-button").css("background-color", "white");
        $(".follow-button").css("border-color", "#764ba2");
      });
    }
  }); 
});
})
$(function () {
 
    $('.header_logo_menu').on('click', '.open-search', function() {

    $('[name="searchForm"]').addClass('searchActive');
        $('[name="searchForm"]').focus(function(){
      
   
        });
        
    });
    $('[name="searchForm"]').blur(function() {
      
        $('[name="searchForm"]').removeClass( "searchActive");

      });
  });

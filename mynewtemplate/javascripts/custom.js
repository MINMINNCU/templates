var $K2 = jQuery.noConflict();
      
    $K2( document ).ready(function() {
      "use strict";
      
      $K2(this).find('.introtext').hide();
      $K2(this).find('.tagbox').hide();
      $K2(this).find('.comments').hide();
      $K2(this).find('.itemDateCreated').hide();
      $K2(this).find('.itemTitle').hide();

      var count=1;
      $K2('#searchBtn').on('click',function() {
        
        if ( count%2==1) {
          $K2( '#k2SearchBlock').show();
          count++;
        } else {
          $K2( '#k2SearchBlock' ).hide();
          count++;
        }
      });

      $K2('.ditem').mouseenter(function(){
        $K2(this).find('.tagbox').show();
        $K2(this).find('.introtext').show();
        $K2(this).find('.comments').show();
        $K2(this).find('.itemTitle').show();
        $K2(this).find('.numOfComments').hide();

      });

      $K2('.ditem').mouseleave(function(){
        $K2(this).find('.tagbox').hide();
        $K2(this).find('.introtext').hide();
        $K2(this).find('.comments').hide();
        $K2(this).find('.itemTitle').hide()
        $K2(this).find('.numOfComments').show();

      });
      //disable scroll of the pagr which under the overlayer
      $K2(document).on('click', '.modal_link,#cboxClose,#cboxOverlay', function() {
        $K2(document).find('body').toggleClass('underOverlay');
      });

      
     
    });

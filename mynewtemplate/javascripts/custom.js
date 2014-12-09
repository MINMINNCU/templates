var $K2 = jQuery.noConflict();
      
    $K2( document ).ready(function() {
      "use strict";


      // var x=$K2('#centerBlock').css('width');
      // x=x.split("px")[0];
      // var x1=x*0.09;
      // x1=x1+'px';
      // $K2(document).find("#searchBtn").css('left',x1);
      // $K2(document).find("#centerPost").css('left',x1);

      // var y=$K2('#centerBlock').css('height');
      // y=y.split("px")[0];
      // var y1=y*0.2;
      // y1=y1+'px';
      // $K2(document).find("#searchBtn").css('top',y1);
      // y1=-(y*0.2);
      // y1=y1+'px';
      // $K2(document).find("#centerPost").css('top',y1);

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

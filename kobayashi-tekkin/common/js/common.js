$(function(){
     //  ハンバーガーメニュー
      $(function(){
        $('.menu-trigger').on('click',function(){
          $(this).toggleClass('active');
          $('.sp-menu').slideToggle();
          return false;
        });
      });
   });
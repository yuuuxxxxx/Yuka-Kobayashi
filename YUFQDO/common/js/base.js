jQuery(function($){
//ここに普通のjQueryの書き方で。下の行は例
// メニュー開閉
$(function(){
$('.menu-trigger').on('click',function(){
$(this).toggleClass('active');
$('.sp-menu').slideToggle();
return false;
});
});

$('nav a').on('click', function(){
       if (window.innerWidth <= 768) {
           $('.menu-trigger').click();
       }
   });


$(function(){
var topBtn=$('#contact-button');
topBtn.hide();
//◇ボタンの表示設定
$(window).scroll(function(){
  if($(this).scrollTop()>100){
    //---- 画面を100pxスクロールしたら、ボタンを表示する
    topBtn.fadeIn();
  }else{
    //---- 画面が80pxより上なら、ボタンを表示しない
    topBtn.fadeOut();
  }
});
});

$(function(){
    $('#logotop').click(function () {
        //id名#pagetopがクリックされたら、以下の処理を実行
        $("html,body").animate({scrollTop:0},500);
    });
});

	
// SP表示でハンバーガーメニューに
   $(function(){
    //  ハンバーガーメニュー
     $(function(){
       $('.Hamburger').on('click',function(){
         $(this).toggleClass('active');
         $('.HamburgerWrapper__ul').slideToggle();
         return false;
       });
     });
  });

    // １文字ずつ表示
    $(window).on('load',function(){
        // ここから文字を<span></span>で囲む記述
        $('.TopMassage__h1').children().andSelf().contents().each(function() {
            if (this.nodeType == 3) {
            $(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
        }
        });
        // ここから一文字ずつフェードインさせる記述
        $('.TopMassage__h1').css({'opacity':1});
        for (var i = 0; i <= $('.TopMassage__h1').children().size(); i++) {
            $('.TopMassage__h1').children('span:eq('+i+')').delay(100*i).animate({'opacity':1},100);
        };
    });
        
	
	
});

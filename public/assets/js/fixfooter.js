$(function() {
   //フッターを一番下に固定
   var $ftr = $('.l-footer');
   if (window.innerHeight > $ftr.offset().top + $ftr.outerHeight()) {
       $ftr.attr({'style': 'position: fixed; top: ' + (window.innerHeight - $ftr.outerHeight()) + 'px;'});
   }
});
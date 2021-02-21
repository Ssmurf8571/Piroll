jQuery(document).ready(function(){

    $path = window.location.href;
    jQuery('a[href="' + $path + '"]').each(function(){
      jQuery(this).addClass('active');
    });
  
  });
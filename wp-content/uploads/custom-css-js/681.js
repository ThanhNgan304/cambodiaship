<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 


jQuery(document).ready(function( $ ){

   $('.col_uudai').hover(
    function() {
    $( this).find('> .col-inner').toggleClass('col_uudai_hover');
     $( this).find('.label_uudai > .col > .col-inner').toggleClass('label_uudai_hover');
      $( this).find('.label_uudai > .col > .col-inner > h5').toggleClass('label_uudai_text_hover');
  }
  );
  
     $('html:lang(vi) .translate_str:lang(vi)').show(); 
    $('html:lang(vi) .translate_str:lang(en-GB)').hide(); 
    $('html:lang(vi) .translate_str:lang(km)').hide(); 
  
   $('html:lang(en-GB) .translate_str:lang(en-GB)').show(); 
    $('html:lang(en-GB) .translate_str:lang(vi)').hide(); 
    $('html:lang(en-GB) .translate_str:lang(km)').hide(); 
  
      $('html:lang(km) .translate_str:lang(km)').show(); 
    $('html:lang(km) .translate_str:lang(vi)').hide(); 
    $('html:lang(km) .translate_str:lang(en-GB)').hide();  
  
  	 var active =  fullpage_api.getActiveSection().index;
     console.log(active);
     var dropdown_icon = $('.home li.has-dropdown');
   
    if(active == 0){
      $('.home header').find('.nav-dropdown').addClass('position_header_bottom');
      dropdown_icon.addClass('dropdownmenu_icon');
      $('.home header').addClass('header_banner');
      
    }
     $('html').bind('mousewheel DOMMouseScroll', function (e) {
       var active =  fullpage_api.getActiveSection().index;
        var dropdown_icon = $('.home li.has-dropdown');
      if(active == 0){
        $('.home header').find('.nav-dropdown').addClass('position_header_bottom');
        dropdown_icon.addClass('dropdownmenu_icon');
        $('.home header').addClass('header_banner');
         
      }else{
         $('.home header').removeClass('header_banner');
         $('.home header').addClass('header_transition_op');
        $('.home header').find('.nav-dropdown').removeClass('position_header_bottom');
        dropdown_icon.removeClass('dropdownmenu_icon');
        
      }
});
 
  $(document).on('click', '.fp-right', function(){
  var active =  fullpage_api.getActiveSection().index;
        var dropdown_icon = $('.home li.has-dropdown');
      if(active == 0){
        $('.home header').find('.nav-dropdown').addClass('position_header_bottom');
        dropdown_icon.addClass('dropdownmenu_icon');
        $('.home header').addClass('header_banner');
         $('.backtopbutton') .fadeOut(duration);
      }else{
         $('.home header').removeClass('header_banner');
         $('.home header').addClass('header_transition_op');
        $('.home header').find('.nav-dropdown').removeClass('position_header_bottom');
        dropdown_icon.removeClass('dropdownmenu_icon');
         $('.backtopbutton') .fadeIn(duration);
      }
});

  $(function(){

  });
  

});</script>
<!-- end Simple Custom CSS and JS -->

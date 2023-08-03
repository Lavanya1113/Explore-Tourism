$(document).ready(function(){
    $(".card").hide();
    $(".card1").hide();
    $(".card2").hide();
    $('#visible').on({
       click: function(){
            $('.card').show(1000)
        },
       dblclick: function(){
            $(".card").hide(1000);
        }
    });
    $('#visible1').on({
        click: function(){
            $('.card1').show(1000)
        },
       dblclick: function(){
            $(".card1").hide(1000)
        }
    });
    $('#visible2').on({
        click: function(){
            $('.card2').show(1000)
        },
       dblclick: function(){
            $(".card2").hide(1000)
        }
    });
})
  window.addEventListener('load', function() {
    document.getElementsByName('email').value = '';
    document.getElementsByName('password').value = '';
  });
  window.onload = function() {
    window.scrollTo(0, 0);
  };




  


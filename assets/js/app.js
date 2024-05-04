// const efcc_countdown = new countdown({
//   target: '.countdown',
//   dayWord: ' days',
//   hourWord: ' hours',
//   minWord: ' mins',
//   secWord: ' secs'
// });

$(document).ready(function () {
  $('.brand-slider').slick({
    dots: true,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
  });

  $('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.plus').click(function () {
    var $input = $(this).parent().find('input');
    var $input_value = $(this).parent().find('input').val();
    if($.trim($input_value) == ''){
      $input.val(1);  
    }else{
      $input.val(parseInt($input.val()) + 1);
    }
    $input.change();
    return false;
  });

  $('.product_detail .qty-wrapper input').on('change',function(e){
    let qty_value = e.target.value;
    if(qty_value < 1){
      $(this).val(1);
      qty_value = 1;
    }
    $('.product_detail .actions input[name=qty]').val(qty_value);
  });
});

// Set the date we're counting down to
var countDownDate = new Date("sep 11, 2024 21:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  if($("#timer").length){
    document.getElementById("timer").innerHTML = '<div class="day mx-1"><span class="num">' + days + '</span><span class="word">Days</span></div><div class="hour mx-1"><span class="num">' + hours + '</span><span class="word">Hours</span></div><div class="min mx-1"><span class="num">' + minutes + '</span><span class="word">Mins</span></div><div class="sec mx-1"><span class="num">' + seconds + '</span><span class="word">Secs</span></div>';
  }


  // "<p>" + days + " Days</p> <p>" + hours + " Hours</p> <p>"
  // + minutes + " Minutes</p> <p>" + seconds + " Secounds</p> ";

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
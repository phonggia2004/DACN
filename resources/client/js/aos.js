AOS.init({
    duration: 1000, // thời gian chạy animation
    once: true      // chỉ chạy 1 lần khi scroll
  });

  $(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 1500
    });
  });
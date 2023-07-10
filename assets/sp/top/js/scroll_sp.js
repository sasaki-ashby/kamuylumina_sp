$(function () {
  var windowWidth = $(window).width();
  var x = 900;
  $(window).resize(function () {
    var ww = $(window).width();

    if (windowWidth != ww) {
      if (ww >= x) {
        for (let i = 1; i <= 15; i++) {
          $("#top" + i).remove("cont");
          $("#top" + i).add("scrollify");
          console.log($("#top" + i));
        }
      } else {
        for (let i = 1; i <= 15; i++) {
          $("#top" + i).add("cont");
          $("#top" + i).remove("scrollify");
          console.log($("#top" + i));
        }
      }
      windowWidth = ww;
    }
  });
});

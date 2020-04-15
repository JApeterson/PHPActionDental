  WebFontConfig = {
      google: { families: ['Syncopate::latin', 'Dancing+Script::latin'] }
  };
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();

$(document).ready(function () {
    var str = location.href;
    $(".navbar-nav li a").each(function () {
        if (str.indexOf(this.href) > -1) {
            $("li.active").removeClass("active");
            $(this).parent().addClass("active");

        }
    });
});

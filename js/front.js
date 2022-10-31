jQuery(document).ready(function ($) {
  $('#searchBarTabs').tabCollapse();

  $('#searchBarTabs').on('shown-accordion.bs.tabcollapse', function(){
    $('#searchBarTabs-accordion').find('.js-tabcollapse-panel-heading:first').css({"color":"#fff"});
    $('#searchBarTabs-accordion').find('.panel-heading:first').css({"background-color":"var(--ou_crimson)"});
    if ($('#books-collapse').hasClass("in")) {
      $('#books-collapse').parent().find('.books_articles_more_btn').css({"color": "#fff"})
    }
  });

  $('.books_articles_more_btn').click(function() {
    console.log("I CLICKED");
  })

  $(document).on("shown.bs.collapse shown.bs.tab", ".panel-collapse, a[data-toggle='tab']", function (e) {
    var currT = e.currentTarget;
    $(currT).siblings('.panel-heading').css({"background-color":"var(--ou_crimson)"})
    $(currT).siblings('.panel-heading').find('.js-tabcollapse-panel-heading:first').css({"color":"#fff"});

    $('#searchBarTabs-accordion').find('.panel-collapse[aria-expanded=false]').parent().find('.panel-heading').css({"background-color": "#f5f5f5"}).find('.js-tabcollapse-panel-heading:first').css({"color":"#000"});
    if ($('#books-collapse').hasClass("in")) {
      $('#books-collapse').parent().find('.books_articles_more_btn').css({"color": "#fff"})
    } else {
      $('#books-collapse').parent().find('.books_articles_more_btn').css({"color": "#000"})
    }
  });
});
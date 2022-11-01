jQuery(document).ready(function ($) {
  // init tab collapse functionality for small screens
  $('#searchBarTabs').tabCollapse();

  // called when tabs are collapsed to accordions
  $('#searchBarTabs').on('shown-accordion.bs.tabcollapse', function() {
    // set correct colors to headings and font
    $('#searchBarTabs-accordion').find('.js-tabcollapse-panel-heading:first').css({"color":"#fff"});
    $('#searchBarTabs-accordion').find('.panel-heading:first').css({"background-color":"var(--ou_crimson)"});
    if ($('#books-collapse').hasClass("in")) {
      $('#books-collapse').parent().find('.books_articles_more_btn').css({"color": "#fff"})
    }
  });

  // init tooltip if not touch device
  // var is_touch_device = 'ontouchstart' in document.documentElement;
  // if (!is_touch_device) {
    $('[data-toggle="tooltip"]').tooltip({});
  //}

  // when an accordion is selected. activate current accordion header colors and change inactive ones
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

  // build urls and navigate based on search button clicked
  $('.search_btn').click(function(event){
    // event.stopPropagation();
    // event.preventDefault();
    var search_clicked = $(this).data('search');
    var search_value = $(".custom-search-form").find(`input[data-search='${search_clicked}']`).val();

    var search_url = "";
    switch (search_clicked) {
      case 'books':
        search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?query=any,contains,"+search_value+"&tab=default_tab&search_scope=default_scope&vid=OUNEW&lang=en_US&offset=0&conVoc=false");
        break;
      case 'dlocal':
        search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?query=any,contains,"+search_value+"&tab=default_tab&search_scope=ou_alma&vid=OUNEW&lang=en_US&offset=0");
        break;
      case 'journals':
        search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/jsearch?query=any,contains,"+search_value+"&vid=OUNEW&lang=en_US");
        break;
      case 'libSite':
        search_url = encodeURIComponent("/search/node/"+search_value);
        break;
      default:
        search_url = "";
    }

    if (search_url !== "") {
      $('<a href="'+search_url+'" target="blank"></a>')[0].click();
    }
  });
});